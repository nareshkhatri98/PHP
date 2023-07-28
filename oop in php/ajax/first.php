<form action="">
    <div>
        <input type="text" name="comment" id="comment" placeholder="comment here..">
        <input value="comment" type="submit" name="add_comment" id="buttom">
    </div>
</form>
<h1>Comment List</h1>
<div class="comment-list">
    
</div>
<script>
    cosnt form = document.getElementByTagName('form')[0];
    const btn = document.getElementById('btn');

    form.addEventListener('submit',function(e)){
        e.preventDefault();
        let comment = document.getElementById('comment').value;
        $.ajax({
            url:'comment.php';
            type:'post',
            data:{comment},
            success:function(res){
                console.log(res);
                let msg =JSON.parse(res).msg; // parse the returned value from backend
                $('#msg').val('') // empty the comment box after commented
                $('#comment-list').load("#comment-list");
                // relpad the comment list using jquery.
            },
            error:function(err){
                console.log(err);
            }
        })
    }
    
</script>