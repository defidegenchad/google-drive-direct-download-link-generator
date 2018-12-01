<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Google Drive Direct Download Link Generator</title>
  <meta name="description" content="Easily Generate GDRIVE Link for Drirect Download."/>
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
  <link href='https://fonts.googleapis.com/css?family=Asap Condensed' rel='stylesheet'>
  <link rel="icon" href="img/google drive.png" type="image/png" sizes="16x16">
   <link rel="stylesheet" href="css/style.css">
</head>

<body background="https://i.pinimg.com/originals/25/e3/56/25e3569e1f5594b25195272cd5f4386a.jpg">
  <div class="container">
  <div style="padding-top:20px;">
	<center><img src="img/google drive.png" style="height:150px;" alt="Google Drive Logo">
	<h2 style=" font-family: 'Asap Condensed';background:white;max-width:320px;border-radius:30px;"><span style="color:#10975B">G</span><span style="color:#E3B73A;">DRIVE</span> <span style="color:#2E70DD;">DOWNLOADER</span><span class="badge badge-danger"></span></h2> 
	</center>
	</div>
  <div class="panel panel-default panel-primary" id="mainpanel">
    <div class="panel-heading">
      <h1 class="panel-title">Google Drive Direct Download Link Generator</h1>
    </div>
    <div class="panel-body">
      <form>
        <div class="form-group">
          <label for="sharelink">Share link</label>
          <input type="text" class="form-control" id="sharelink" placeholder="https://drive.google.com/file/d/XX-X__XXXXX-XXXXXXXXXXXXXXXX/view?usp=sharing" autofocus="true">
        </div>
        <div class="form-group">
          <label for="downloadlink">Download link</label>
          <div class="input-group">
            <input type="text" class="form-control" id="downloadlink" readonly>
            <span class="input-group-btn">
        <button id="copylinkbtn" class="btn btn-success" type="button" data-clipboard-target="#downloadlink" disabled>Copy link</button>
      </span>
          </div>
        </div>
      </form>

  <button class="btn btn-warning" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  How To Use?
</button>
  <div class="collapse" id="collapseExample">
   <br />
    <div class="well text-center">
      <ul align="left">
	  <p><strong>"also working with any account's file link"</strong></p>
		<li>Open Your Google Drive</li>
		<li>Right Click On Your File</li>
		<li>Click On Share</li>
		<li>Click On Get Shareable Link</li>
		<li>Click On Copy Link/Copy Link</li>
		<li>Paste Here</li>
	  </ul>
    </div>
  </div>      
      
    </div>
    <div class="panel-footer text-right">&copy; Abhijit Kumar</div>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.10/clipboard.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/mouse0270-bootstrap-notify/3.1.5/bootstrap-notify.min.js'></script>
<script  src="js/index.js"></script>
</body>

</html>
