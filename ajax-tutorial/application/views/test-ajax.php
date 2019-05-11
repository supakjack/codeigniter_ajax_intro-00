<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            $("button#bt").click(function() {

                /*$.get("Ajax/get", {
                    id: "1",
                    name: "supak jack get",
                    nickname: "แจ๊ค"
                }, function(res) {
                    alert(res)
                })*/

                /*$.post("Ajax/post", {
                    id: "1",
                    name: "supak jack post",
                    nickname: "แจ๊ค"
                }, function(res) {
                    alert(res)
                })*/

                /*$.ajax({
                    url:"Ajax/getajax",
                    data:"id=1&name=supak&nickname=jack",
                    type:"GET",
                    success:function(res){
                        alert(res)
                    },
                    error:function(err){
                        alert('error : '+err)
                    }
                })*/

                $.ajax({
                    url: "Ajax/getjson",
                    data: "id=1&name=supak&nickname=jack",
                    type: "POST", //GET
                    dataType:"json",
                    success: function(res) {
                        $('#show').text(res.id+" "+res.prefix+res.fname+" "+res.lname+" "+res.nname)
                    },
                    error: function(err) {
                        alert('error : ' + err)
                    }
                })

            })

        })
    </script>

</head>

<body>

    <?php echo base_url() . "<br>"; ?>
    <?php echo __DIR__ . "<br>"; ?>
    <?php echo __FILE__ . "<br>"; ?>
    <?php echo dirname(__FILE__) . "<br>" ?>

    <h2>This is a heading</h2>

    <p>This is a paragraph.</p>
    <p>This is another paragraph.</p>

        <div id="show"></div>
    <button id="bt">Click me</button>

</body>

</html>