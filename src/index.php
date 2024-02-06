<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="expires"  content="0">
    <title>GIT Cheat Sheet</title>
    <base target="_blank">
    <link rel="shortcut icon" type="image/x-icon" 
          href="data:image/x-icon;base64,<?php echo base64_encode(file_get_contents("git.ico"))?>">
    <style>
      <?php include 'git.css'?> 
    </style>
    <script>
      <?php include 'git.js'?> 
    </script>
  </head>
  <body>
    <?php include 'general.html'?> 
    <?php include 'config.html'?> 
    <?php include 'init.html'?> 
    <?php include 'add-reset.html'?> 
    <?php include 'restore.html'?> 
    <?php include 'revert.html'?> 
    <?php include 'clean.html'?> 
    <?php include 'status.html'?> 
    <?php include 'log.html'?> 
    <?php include 'diff.html'?> 
    <?php include 'tag.html'?> 
    <?php include 'remote.html'?> 
    <?php include 'pull-push.html'?> 
    <?php include 'branch.html'?> 
    <?php include 'merge.html'?> 
    <?php include 'stash.html'?> 
    <?php include 'rebase.html'?> 
    <?php include 'cherry-pick.html'?> 
  </body>
</html>
