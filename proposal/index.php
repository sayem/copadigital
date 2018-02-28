<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta name="robots" content="noindex, nofollow">
<meta name="viewport" content="width=device-width, initial-scale =1.0, user-scalable =no">
<link href='https://betterproposals.io/proposal/custom.css' rel='stylesheet' type='text/css'>
<title>Your Proposal</title>
<!-- Hotjar Tracking Code for http://copadigitalgroup.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:550319,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
</head>

<body>

<?php if (isset($_GET['ContactID'])) {?>
<iframe id="iframe1" frameborder="0" src="https://betterproposals.io/proposal/index.php?ProposalID=<?php echo $_GET['ProposalID'];?>&ContactID=<?php echo $_GET['ContactID'];?>" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
<?php } else { ?>
<iframe id="iframe1" frameborder="0" src="https://betterproposals.io/proposal/index.php?ProposalID=<?php echo $_GET['ProposalID'];?>&debug=yes" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
<?php } ?>

</body>
</html>
