<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset= "utf-8" />
	<meta name="description" content="Assignment1, Assignment3" />
	<meta name="keywords" content="Next,Job Descriptions, Salary"/>
	<meta name="author" content="Adeepa Uwanpriya Hettiwaththage" />
	<title> Job Descriptions </title>
	<link href= "styles/style.css" rel="stylesheet" />
	<script src="scripts/apply.js"></script>
	</head>
	<body id="jobspage">
	
		<?php
			include_once("header.inc");
			include_once("menu.inc");
		?>
		
		<h1 id="job" >Comapany's Positions </h1>
		<ol>   <!--An ordered list-->
		<li class="li1">Cloud Architect</li>
		<li class="li1">Software Developer</li>
		</ol>
		<aside>
		<h5> Salary Range </h5>
		<p> AU&#36;87,593 - AU&#36;162,391 </p>
		<p> &#42;Average: AU&#36;126,538 </p>
		</aside>
		<section> 
		<h3>01. Cloud Architect &#160;&#40; Reference Number: A45ZF &#41;</h3>
		<blockquote> Cloud architects oversee dealing with the cloud computing design in an association, particularly as cloud advances become progressively mind-boggling. Cloud computing engineering incorporates everything included with cloud computing, including the front-end platforms, servers, storage, delivery and systems required to oversee cloud storage. What's more, this alludes to the segments and subparts required for cloud computing.
		<br/>
		<a href="https://www.cio.com/article/3282794/what-is-a-cloud-architect-a-vital-role-for-success-in-the-cloud.html" title="click here to view the website"> Reference: </a>
		</blockquote>
		<h4>Required Qualification</h4>
		<dl class="dl">
			<dt>Essential</dt>
			<dd><ul class="ul">
				<li> Leading cultural change for cloud adoption </li>
				<li> Developing a cloud strategy  </li>
				<li> Coordinating the adaptation process </li>
				<li> Developing and coordinating cloud architecture </li>
				<li> Two or more work experience in this field</li>
				</ul>
			</dd>
		</dl>
		<dl class="dl">
			<dt> Preferable</dt>
			<dd><ul class="ul">
				<li>Creating a "cloud broker team"</li>
				<li>Operating at scale</li>
				<li>Oversee governance and mitigate risk</li>
				<li>Finding talent with the necessary skills</li>
				<li> Team-work</li>
				</ul>
			</dd>
		</dl>
		<p><a href="apply.php" id="A45ZF"  class="applylink">Apply</a></p>
		</section>
		<aside>
		<h5> Salary Range </h5>
		<p> AU&#36;49,435 - AU&#36;98,266 </p>
		<p> &#42;Average: AU&#36;68,029 </p>
		</aside>
		<section>
		<h3> 02. Software Developer &#160;&#40; Reference Number: B5A7K &#41;</h3>
		<blockquote>Do you realize that cell phone application you depend on? That PC amusement that kept you transfixed for a considerable length of time as a child? That program that causes your spending plan and tracks consumption? Programming engineers made every one of them. They utilize methods of math, science, building, and structure, and regularly need to test and assess their very own frameworks just as programming worked by other individuals
		<br/>
		<a href="https://www.thebalancecareers.com/software-engineer-skills-list-2062483" title="click here to view the website"> Reference: </a> <!--have use link to refernce-->
		</blockquote>
		<h4>Required Qualification</h4>
		<dl> <!--A definition lis-->
			<dt> Essential </dt>
			<dd><ul class="ul">
				<li>Computer Programming&#47;Coding</li>
				<li> Object-oriented design &#40;OOD&#41; </li>
				<li> Experience Working With Linux/Unix, Perl, or Shell</li>
				<li> Experience With JavaScript</li>
				<li> Two or more work experience in this field</li>
				</ul>
			</dd>
		</dl>
		<dl>
			<dt> Preferable </dt>
			<dd><ul class="ul">
				<li> Intrinsic motivation </li>
				<li> Interpersonal skills</li>
				<li> Business Skills</li>
				<li> Open-mindedness</li>
				<li> Team-work</li>
				</ul>
			</dd>
		</dl>
		<p><a href="apply.php" id="B5A7K"  class="applylink">Apply</a></p>
		</section>
		<section>
		<h3>Department Headers</h3>
		<table>   
			<tr>
				<th>Job Name</th>
				<th>Reference Number</th>
				<th>Department Head</th>
				<th>Contact number</th>
			</tr>
			<tr>
				<th>Cloud Architect</th>
				<td>A45ZF</td>
				<td>M. John</td>
				<td>+61 089656454</td>
			</tr>
			<tr>
				<th>Software Developer</th>
				<td>B5A7K</td>
				<td>K. Mathew</td>
				<td>+61 624591082</td>
			</tr>
		</table>
		</section>
		<!--footer-->
		<?php
			include_once("footer.inc");
		?>
		</body>
	</html>