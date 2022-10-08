<html>
<head>
    <title>jQuery Validation for select option</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
</head>

<body>
    <p>Clicking the submit button without selecting an item from the list will show a message.</p>

    <select id="selBooks" name="books">
        <option value=""></option>
        <option value="Stategies Unplugged">Stategies Unplugged</option>
        <option value="jQuery Reference">jQuery Reference</option>
        <option value="HTML5 Fundamentals">HTML5 Fundamentals</option>
        <option value="Popular Science">Popular Science</option>
    </select>

    <input type="submit" id="submit" value="Submit" />
</body>

<script>
    $(document).ready(function () {
        $("#submit").click(function () {

            var books = $('#selBooks');
            if (books.val() === '') {
                alert("Please select an item from the list and then proceed!");
                $('#selBooks').focus();

                return false;
            }
            else return;
        });
    });
</script>
</html>