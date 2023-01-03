<?php

class Test
{
    public function __construct(
        public readonly string $value
    ) {
    }
}

$test = new Test('test');

?>

<html>

<head>
    <title>Test</title>
</head>

<body>
    <h1>Test</h1>
    <p>The value is <?= $test->value ?></p>

    <?php if ($test->value === 'test') : ?>
        <p>It's a test</p>
    <?php endif ?>
</body>

</html>