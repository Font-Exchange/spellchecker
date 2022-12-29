<html>
<head>
    <script>
        var text = <?php echo 'Current version: ' . file_get_contents('http://expoodisha.com/Software/spellchecker/word_contribution/data.txt'); ?>;
    </script>
</head>
<body>
    <script>
        document.write(text);
    </script>
</body>
</html>
