<div id="gallery_thumbs"<? if(!strstr($url, 'about-gallery')){ ?> style="display:none;"<? } ?>><? drawAllThumbs(); ?></div>

<? if(!$includedBtm){ ?>
<? if ($subnav) { ?></div><br clear="all" /><? } ?>

		</div>
		<br clear="all" />
	</div>
</div>
	<div id="bottom-bg-container"><div id="bottom-bg">&nbsp;</div></div>
	<div id="bottom"><a href='mailto:feedback@artofperio.com'>Please send website comments or questions to feedback@artofperio.com.</a></div>
	<div id="footer">

<p>We service most of New Jersey and Eastern Pennsylvania. To find out more about dentistry and periodontics in your area:</p>

<div class="areas">
	<p><b><?=city('Hunterdon County')?></b></p>
<?
cities("
	Alexandria Township
	Annandale
	Baptistown
	Bethlehem Township
	Bloomsbury
	Califon
	Clinton
	Cokesbury
	Delaware Township
	East Amwell Township
	Flemington
	Franklin Township
	Frenchtown
	Glen Gardner
	Hampton
	High Bridge
	Holland 
	Kingwood
	Lambertville
	Lebanon
	Little York
	Milford
	Neshanic Station
	Oldwick
	Pittstown
	Pottersville
	Quakertown
	Raritan Township
	Readington
	Ringoes
	Rosemont
	Sergeantsville
	Stanton
	Stockton
	Tewksbury
	Three Bridges
	Union Township
	West Amwell Township
	Whitehouse
	Whitehouse Station
");
?>

	<p><b><?=city('Morris County')?></b></p>
<?
cities("
	Bartley                                                             
	Basking Ridge
	Boonton
	Brookside
	Budd Lake
	Butler
	Califon
	Cedar Knolls
	Cedar Knolls
	Chatham
	Chester
	Denville
	Denville
	Dover
	East Hanover
	East Hanover
	Flanders
	Flanders
	Florham Park
	Gillette
	Gillette
	Green Village
	Hanover
	Hibernia
	Ironia
	Kenvil
	Kinnelon
	Lake Hiawatha
	Lake Hopatcong
	Landing
	Ledgewood
	Lincoln Park
	Littleton
	Long Valley
	Madison
	Mendham
	Middle Valley
	Millington
	Milltown
	Mine Hill
	Mine Hill
	Montville
	Morris Plains
	Morristown
	Mount Arlington
	Mount Freedom
	Mount Freedom
	Mount Olive
	Mount Tabor
	Mountain Lake
	Naughtright
	Netcong
	New Vernon
	Oak Ridge
	Parsippany
	Pequannock
	Picatiny Arsenal
	Pine Brook
	Pleasant Grove
	Pleasant Hill
	Pompton Plains
	Ralston
	Randolph
	Riverdale
	Rockaway
	Roxbury
	Schooleys Mountain
	Stirling
	Stockholm
	Succasunna
	Towaco
	Victory Gardens
	Wharton
	Whippany
	Whippany
	White Meadow Lake
");
?>

	<p><b><?=city('Somerset County')?></b></p>
<?
cities("
	Basking Ridge
	Bedminster
	Bellemead
	Bernardsville
	Blawenburg
	Bound Brook
	Branchburg
	Bridgewater
	Far Hills
	Flagtown
	Franklin
	Franklin Park
	Gladstone
	Green Brook
	Hillsborough
	Kingston
	Liberty Corner
	Lyons
	Manville
	Martinsville
	Millstone
	Montgomery
	Neshanic Station
	North Plainfield
	Peapack/Gladstone
	Pluckemin
	Raritan
	Rocky Hill
	Skillman
	Somerset
	Somerville
	South Bound Brook
	Warren
	Warrenville
	Watchung
	Zarephath
");
?>

	<p><b><?=city('Sussex County')?></b></p>
<?
cities("
	Andover
	Augusta
	Branchville
	Byram
	Frankford
	Franklin
	Fredon
	Glasser
	Glenwood
	Greendell
	Hamburg
	Hampton
	HardystonTownship
	Highland Lakes
	Hopatcong
	Lafayette
	Layton
	Mc Afee
	Middleville
	Montague
	Newton
	Ogdensburg
	Sandyston Township
	Sparta
	Stanhope
	Stanhope
	Stillwater
	Stockholm
	Sussex
	Swartswood
	Tranquility
	Vernon
	Wallpack Center
	Wantage Township
");
?>

	<p><b><?=city('Warren County')?></b></p>
<?
cities("
	Allamuchy
	Asbury
	Asbury
	Belvidere
	Blairstown
	Broadway
	Buttzville
	Changewater
	Columbia
	Delaware
	Frelinghuysen Township
	Great Meadows
	Hackettstown
	Harmony Township
	Hope
	Independence Township
	Johnsonburg
	Johnsonburg
	Liberty
	Mansfield
	Milford
	Oxford
	Phillipsburg
	Port Murray
	Stewartsville
	Vienna
	Washington
	White Township
");
?>

	<p><b><?=city('Union County')?></b></p>
<?
cities("
	Chatham
	Madison
	Summit
");
?>

	<p><b><?=city('Middlesex County')?></b></p>
<?
cities("
	Dunellen
	Edison
	Middlesex
	New Brunswick
	Piscataway
");
?>

	<p><b>Pennsylvania Cities</b></p>
<?
cities("
	Easton, PA
	Allentown, PA
	Stroudsburg, PA
");
?>

	<p>Please note that not ALL cities and counties we service are listed. If you have any questions about our services in your area, please <a href="mailto:drg@artofperio.com">contact us</a>.</p>
</div>
<? 
/*
<p align='center'>Serving <a href='<? print $page ?>?County=Morris' alt='Morris County'>Morris County</a>, NJ, and neighboring Counties in Northern New Jersey:<br><a href='<? print $page ?>?County=Somerset' alt='Somerset County'>Somerset</a>, <a href='<? print $page ?>?County=Hunterdon' alt='Hunterdon County'>Hunterdon</a>, <a href='<? print $page ?>?County=Warren' alt='Warren County'>Warren</a>, and <a href='<? print $page ?>?County=Sussex' alt='Sussex County'>Sussex</a>.</p>

if ($County=="Morris") print "<p align='center'>Morris County includes: Boonton, Lake Hiawatha, Lincoln Park, Montville, Mountain Lake, Parsippany, Pine Brook, Towaco, Butler, Oak Ridge, Pequannock, Pompton Plains, Riverdale, Stockholm, Dover, Mine Hill, Picatiny Arsenal, Budd Lake, Califon, Denville, Flanders, Hackettstown, Hibernia, Ironia, Kenvil, Lake Hopatcong, Landing, Ledgewood, Long Valley, Mount Arlington, Netcong, Rockaway, Randolph, Schooleys Mountain, Succasunna, Mount Tabor, Wharton, Basking Ridge, Brookside, Cedar Knolls, Chatham, Chester, Florham Park, Gillette, Gladstone, Green Village, East Hanover, Madison, Mendham, Millington, Morris Plains, Morristown, Mount Freedom, New Vernon, Stirling, and Whippany.<p>";
if ($County=="Somerset") print "<p align='center'>Somerset County includes: Warren, Plainfield, Watchung, Basking Ridge, Bedminster, Bernardsville, Far Hills, Gladstone, Liberty Corner, Lyons, Peapack, Pluckemin, Belle Mead, Blawenburg, Hopewell, Kingston, Princeton, Rocky Hill, Skillman, Bound Brook, Bridgewater, Dunellen, Flagtown, Franklin Park, Manville, Martinsville, Hillsborough, Neshanic Station, Raritan, Somerset, Somerville, South Bound Brook and Zarephath.</p>";
if ($County=="Hunterdon") print "<p align='center'>Hunterdon County includes: Califon, Pottersville, Hopewell, Lambertville, Ringoes, Rosemont, Sergeantsville, Stockton, Titusville, Annandale, Asbury, Baptistown, Bloomsbury, Clinton, Flemington, Frenchtown, Glen Gardner, Hampton, High Bridge, Lebanon, Little York, Milford, Neshanic Station, Oldwick, Phillipsburg, Pittstown, Quakertown, Readington, Somerville, Stanton, Three Bridges, Whitehouse and Whitehouse Station.</p>";
if ($County=="Warren") print "<p align='center'>Warren County includes: Allamuchy, Andover, Belvidere, Blairstown, Buttzville, Changewater, Columbia, Delaware, Great Meadows, Hackettstown, Hope, Johnsonburg, Oxford, Port Murray, Vienna, Washington, Asbury, Bloomsbury, Broadway, Hapton, Milford, Phillipsburg and Stewartsville.</p>";
if ($County=="Sussex") print "<p align='center'>Sussex County includes: Franklin, Glenwood, Hamburg, Hewitt, Highland Lakes, Mc Afee, Ogdensburg, Stockholm, Sussex, Vernon, Andover, Augusta, Branchville, Montague, Glasser, Greendell, Hopatcong, Lafayette, Layton, Middleville, Newton, Sparta, Stanhope, Stillwater, Swartswood, Tranquility, Wallpack Center, Branchville and Princeton.</p>";
*/
?>
		&copy 2007 - <? echo date("Y",time()) ?> Art of Perio |
		IMCC Building, 2A North Road, Chester, NJ 07930 |
		908.879.7709 | 
		<a href="&#109;ai&#108;to&#58;drg%40artofperio&#46;com">drg<span class="">&#64;</span>artofperio.<span class="espan"> [xgs]</span>com</a><br />
		Web design by <a href="http://www.mcswebsolutions.com/">MCS Web Solutions, Inc.</a>
	</div>
<? /*
<!-- 
	<div id="cse" style="width: 500px;margin:0 auto;">Loading</div>
<script src="http://www.google.com/jsapi" type="text/javascript"></script>
<script type="text/javascript"> 
  google.load('search', '1', {language : 'en'});
  google.setOnLoadCallback(function() {
    var customSearchControl = new google.search.CustomSearchControl('002725130450632846163:gfqt7miwnu0');
    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
    customSearchControl.draw('cse');
  }, true);
</script>
 -->


<form action="aop_search.html" id="cse-search-box">
			<input type="hidden" name="cx" value="002725130450632846163:gfqt7miwnu0" />
			<input type="hidden" name="cof" value="FORID:10" />
			<input type="hidden" name="ie" value="UTF-8" />
			<input type="text" name="q" size="31" />
			<input type="submit" name="sa" value="Search" />
			<script type="text/javascript" src="http://www.google.com/jsapi"></script>
			<script type="text/javascript">google.load("elements", "1", {packages: "transliteration"});</script>
			<script type="text/javascript" src="http://www.google.com/coop/cse/t13n?form=cse-search-box&t13n_langs=en"></script>
			<script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=cse-search-box&lang=en&sitesearch=true"></script>
</form>
*/ ?>
</body>
</html>

<? 
	}
	$includedBtm = 1;
?>
