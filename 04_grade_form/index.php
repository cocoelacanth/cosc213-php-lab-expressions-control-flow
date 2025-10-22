<?php
$score = filter_input(INPUT_GET, 'score', FILTER_VALIDATE_INT);
$score = $score ?? null;

function letter_grade(?int $s): ?string {
    if ($s === null || $s < 0 || $s > 100) return null;
    if ($s >= 80) {
      if ($s >= 90) return 'A+';
      if ($s <= 84) return 'A-';
      return 'A';
    }
    if ($s >= 68) {
      if ($s >= 76) return 'B+';
      if ($s <= 71) return 'B-';
      return 'B';
    }
    if ($s >= 55) {
      if ($s >= 64) return 'C+';
      if ($s <= 59) return 'C-';
      return 'C';
    }
    if ($s >= 50) return 'D';
    return 'F';
}
$grade = letter_grade($score);
?>
<!doctype html>
<html>
<head><meta charset="utf-8"><title>Grade Calculator</title></head>
<body>
  <h1>Grade Calculator</h1>
  <form>
    <label>Score (0–100):
      <input name="score" type="number" min="0" max="100"
      value="<?= htmlspecialchars($score !== null ? (string)$score
: '') ?>">
    </label>
    <button>Compute</button>
  </form>
  
  <?php if ($score === null): ?>
    <p>Enter a score to see the letter grade.</p>
  <?php elseif ($grade === null): ?>
    <p>Invalid score. Please enter 0–100.</p>
  <?php else: ?>
    <p>Your grade is <strong><?= $grade ?></strong>.</p>
    <?php if ($grade === 'F'): ?>
      <p>Consider office hours for support.</p>
    <?php endif; ?>
  <?php endif; ?>
</body>
</html>