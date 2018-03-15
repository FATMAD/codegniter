<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('news/edit/'.$news_item['id']); ?>
<?php echo form_open_multipart('upload/do_upload');?>
    <table>
        <tr>
            <td><label for="title">Title</label></td>
            <td><input type="input" name="title" size="50" value="<?php echo $news_item['title'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="text">Text</label></td>
            <td><textarea name="text" rows="10" cols="40"><?php echo $news_item['text'] ?></textarea></td>
        </tr>
       
        <tr>
            <td><label for="img">IAMGE</label></td>
            <td><input type="input" name="img" size="50" value="<?php echo $news_item['img']; ?>" /></td>
            <td> <input type="file" name="pic" accept="image/*"></td>

            <td><?php echo $news_item['img'] ?></td>
            
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit news item" /></td>
        </tr>
    </table>
</form>


