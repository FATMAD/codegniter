<h2><?php echo $title; ?></h2>
<?php  $url="assets/img/" ?>
<?php echo $url="http://127.0.0.1/test1/assets/img/" ?>

 
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>Title</strong></td>
        <td><strong>Content</strong></td>
         <td><strong>IMAGE</strong></td>
        <td><strong>Action</strong></td>
        <a href="" onclick="removeday()" class="deletebtn">Delete</a>

    </tr>
<?php foreach ($news as $news_item): ?>
        <tr>
            <td><?php echo $news_item['title']; ?></td>
            <td><?php echo substr($news_item['text'], 0,100); ?></td>
            <td><img src= "<?php echo $url.$news_item['img']; ?>" alt="<?php echo $news_item['img'] ; ?>" height="150" width="100"></td>
            <td>
                <a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View</a> | 
                <a href="<?php echo site_url('news/edit/'.$news_item['id']); ?>">Edit</a> | 
                <a href="<?php echo site_url('news/delete/'.$news_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>
