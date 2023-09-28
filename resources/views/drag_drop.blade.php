<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 4 Drag and Drop Sortable Example</title>
    <!-- Add Bootstrap 4 CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h2>Sortable List</h2>
    <ul id="sortable-list" class="list-group">
        <li class="list-group-item" data-id="1">Item 1</li>
        <li class="list-group-item" data-id="2">Item 2</li>
        <li class="list-group-item" data-id="3">Item 3</li>
        <li class="list-group-item" data-id="4">Item 4</li>
        <li class="list-group-item" data-id="5">Item 5</li>
    </ul>
    <button id="get-order-button" class="btn btn-primary mt-3">Get Order</button>
</div>

<!-- Add jQuery and jQuery UI -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

<script>
    // Initialize jQuery UI Sortable
    $(function () {
        $("#sortable-list").sortable();
        $("#sortable-list").disableSelection();
        
        // Event handler for the "Get Order" button
        $("#get-order-button").click(function () {
            // Get the updated order of list items
            var updatedOrder = $("#sortable-list").sortable("toArray");
            console.log(updatedOrder);
            
            var listItems = $("#sortable-list").find("li");
            
            // Extract and log the indexes (keys)
            var indexes = [];
            listItems.each(function (index, item) {
              console.log(index, $(item).data('id'))
                indexes.push(index);
            });
            
            console.log(indexes);
        });
    });
</script>

</body>
</html>
