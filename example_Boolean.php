<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body> 
    <?php $task = [
        'title' => 'Finish homework',
        'due' => 'today',
        'assigned_to' => 'Henry',
        'completed' => false
    ];    
    ?>
    <h1>Task For The Day</h1>
        <ul>
            <?php foreach ($task as $heading => $value) : ?> 
            <li>
            <strong><?php echo ucwords($heading); ?>: </strong>
            <?php echo $value; ?>
            </li>
            <?php endforeach; ?>
        </ul>
        <hr />
        <ul>
            <li>
                <strong>Name: </strong> <?php echo $task['title']; ?>
            </li>
            <li>
                <strong>Due Date: </strong> <?php echo $task['due']; ?>
            </li>
            <li>
                <strong>Personal Responsible: </strong> <?php echo $task['assigned_to']; ?>
            </li>
            <li>
                <strong>Status: </strong> <?php echo $task['completed'] ? 'Complete' : 'Incomplete'; ?>
            </li>
        </ul>
</body>
</html>