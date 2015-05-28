<!DOCTYPE>
<html>
    <head>
        <meta name="viewport" content="initial-scale=1">
		<title>DCI - Home</title>
		<link rel="stylesheet" src="//normalize-css.googlecode.com/svn/trunk/normalize.css" />
        <link type="text/css" rel="stylesheet" href="css/styles.css">
        <link href='http://fonts.googleapis.com/css?family=Rambla:400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <header>
		<?php $active = 'index';
			include('menu.php');
		?>
        </header>
        <section>
            <h1>DCI is an independent asset management firm specializing in absolute-return and relative corporate credit strategies.</h1>
            <p>DCI&#8217s investors include some of the largest pension and sovereign wealth funds, private banks, and independent wealth managers globally. The firm was started in 2004 by individuals with a long history of innovation in finance. Their achievements include the creation of the <b>first equity index fund</b> (Wells Fargo) as well as the <b>first default probability and credit portfolio model</b> (KMV).</p>
        </section>
        <section id="graphs">
            <div class="col">
                <img src="images/Map.png">
				<div class="graph-txt">
					<span>FOCUSED ON THE MOST LIQUID, MISPRICED ASSETS GLOBALLY...</span>
				</div>
            </div>
             <div class="col">
                <img src="images/barGraph.png">
				 <div class="graph-txt">
                	<span>...ACTIVELY DIVERSIFIED WITH AIM OF PRODUCING LOW VOLATILITY...</span>
				 </div>
            </div>
             <div class="col">
                <img src="images/lineGraph.png">
				 <div class="graph-txt">
                	<span>...AND UNCORRELATED RETURNS</span>
				 </div>
            </div>
            
        </section>
        
        <section class="blockInfo">
            <div class="smallBlock"><span>Established in<br><b>2004</b></span>           
				<svg height="160" width="2">
                <line x1="0" y1="30" x2="0" y2="130" style="stroke: white; stroke-width: 2"/>
            	</svg>
			</div>

            <div><span>Headquartered in<br><b>SAN FRANCISCO</b></span><svg height="160" width="2">
                <line x1="0" y1="30" x2="0" y2="130" style="stroke: white; stroke-width: 2"/>
           		</svg>
			</div>
            
            <div class="smallBlock"><span>Managing<br><b>$4B+</b><br>in client assets</span>
				<svg height="160" width="2">
					<line x1="0" y1="30" x2="0" y2="130" style="stroke: white; stroke-width: 2"/>
				</svg>
			</div>
            
            <div><span>ACTIVE<br><b>DIVERSIFICATION</b></span>
				<svg height="160" width="2">
					<line x1="0" y1="30" x2="0" y2="130" style="stroke: white; stroke-width: 2"/>
				</svg>
			</div>
            
            <div><span><b>FUNDAMENTAL</b><br><b>RISK MODEL</b><br>Systematic Implementation</span></div>
        </section>
        <footer>
            <?php include("footer.php"); ?>
        </footer>
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="js/mainScript.js"></script>
    </body>
</html>