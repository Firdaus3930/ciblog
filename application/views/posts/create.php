<h2>Create Your Post</h2>
<head>
<style>
body {
  background-image: url('https://img.freepik.com/free-vector/blue-curve-background_53876-113112.jpg?size=626&ext=jpg&ga=GA1.1.1395880969.1709164800&semt=ais');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>
</head>
<body>
<?php echo validation_errors(); ?>

<?php echo form_open_multipart('posts/create'); ?>
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea id="editor1" class="form-control" name="body" placeholder="Add Body"></textarea>
  </div>
  <div calss="form-group">
      <label>Category</label>
      <select name="category_id" class="form-control">
        <?php foreach($categories as $category): ?>
          <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
        <?php endforeach; ?>
      </select>
</div><br>
<div class="form-group">
    <label>Upload Image</label>
    <input type="file" name="userfile" size="20000">
  </div> 
  <button type="submit" class="btn btn-default">Submit</button>
</form>