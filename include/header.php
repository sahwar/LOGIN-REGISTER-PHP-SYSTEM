<!DOCTYPE html>
<html lang="en">
<head>

    <title>TOBSTERA</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../images/favicon.png" />

</head>
<body>

<section id="nav">
    <div class="siteheader">
        <div class="siteheader_section">
            <div class="siteheader_item siteheaderlogo siteheader_btn"><a href="#">TOBSTERA</a></div>
            <div class="siteheader_item siteheader_btn"><a href="index.php">Home</a></div>
        </div>
        <div class="siteheader_section">
        <div class="siteheader_item siteheader_btn">
        <?php if(isset($_SESSION['username'])) echo htmlspecialchars($_SESSION['username']); ?></div>
            <div class="siteheader_item siteheader_btn"><a href="register.php">Register</a></div>
            <div class="siteheader_item siteheader_btn"><a href="login.php">Login</a></div>
        </div>
    </div>
</section>
</body>
</html>
<style>
*{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    direction: ltr;
    color: black;
    text-decoration: none;
    font-family: verdana;
    
}

.siteheader{

    padding: 10px;
    background-color: #bfbfbf;
    display: flex;
    justify-content: space-between;
    text-decoration: none;
}

.siteheader_section{
    display: flex;
    align-items: center;
}

.siteheader_item{
    padding: 5px 10px;
    font-size: 13px;
}

.siteheader_item +.siteheader_item{
    margin-left: 5px;
}

.siteheader_btn{
    cursor: pointer;
}



.siteheaderlogo{
    font-size: 20px;
    line-height: 0;
    color: white;
}

@media all and (max-width:400px){
    .siteheader__item{
        font-size: 10px;
    }
}


#list{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-top:20px
}

.feature-list-item{
    display: flex;
    align-items: center;
    max-width: 400px;
    padding: 10px;
}

.reverse{
    flex-direction: row-reverse;
}

.feature-list-item + .feature-list-item{
    border-top: 1px solid #d7dbdd;
}

.icon , .description{
    padding: 5px 10px;
}

.icon{
    font-size: 50px;
    line-height: 0;
}

.icon>i{
    color: #bcd2ba;
}

.description{
    font-size: 12px;
    color: #86969c;
}


#text-card{
    background-color: #56727c;
    max-width: 900px;
    margin: auto;
    padding: 20px;
}

.primary{
    display: flex;
    justify-content: center;
}

.primary p{
    color: #fff;
    font-family: sans-serif;
    border: 1px solid #678690;
    padding: 10px;
    text-align: justify;
    margin: 3px;
    display: flex;
    flex-direction: column;
}

.heart-icon{
    align-self: center;
    font-size: 40px;
    padding: 3px;
    color: #BCD2BA;
}

@media all and (max-width: 700px){
    .primary{
        flex-direction: column;
    }
}
</style>