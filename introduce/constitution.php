<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php'); ?>
<link rel="stylesheet" href="/assets/css/introduce.css">
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
	<div class="jumbo-wall">
		<div class="container">
			<h2>
				<small>학습자중심의 수업대학 구축을 위한</small><br>
				교수학습지원센터
			</h2>
			<p><b>C</b>enter for <b>T</b>eaching and <b>L</b>earning</p>
		</div>
	</div>
	<div class="page-nav">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li><a href="#">CTL소개</a></li>
				<!-- li class="active">수업자료실</li -->
				<li class="active dropdown">
					<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">구성인력<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="/introduce/greeting.php">인사말</a></li>
						<li><a href="/introduce/purpose.php">설립목적</a></li>
						<li><a href="/introduce/propulsion.php">추진체계</a></li>
						<li><a href="/introduce/constitution.php">구성인력</a></li>
						<li><a href="/introduce/location.php">찾아오시는길</a></li>
					</ul>
				</li>
			</ol>
		</div>
	</div>
	<main id="content" class="introduce constitution">
		<div class="container">
			<section class="constitution">
				<div class="section-header">
					<hr>
					<h3>구성인력</h3>
				</div>
				<p>
				    <img src="/assets/images/introduce/constitution_table.jpg" alt="구성인력 표">
				</p>
				<h4 class="subject"><span></span>교수학습지원체제 (센터) 구성</h4>
				<div class="table-wrap">
					<table class="table table-border">
						<colgroup>
							<col style="width: 172px"/>
							<col style="width: 130px"/>
							<col style="width: 200px"/>
							<col style="width: 100px"/>
							<col style="width: 568px"/>
						</colgroup>
						<thead>
							<tr>
								<th>구분</th>
								<th>성명</th>
								<th>소속</th>
								<th>직위(급)</th>
								<th>주요업무(활동)</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>센터장</td>
								<td>민경희</td>
								<td>교수학습지원센터</td>
								<td>부교수</td>
								<td>교수학습 운영 총괄</td>
							</tr>
							<tr>
								<td>팀장</td>
								<td>남건두</td>
								<td>교수학습지원센터</td>
								<td>팀장</td>
								<td>교수학습 총괄 행정지원</td>
							</tr>
							<tr>
								<td>담당</td>
								<td>박미영</td>
								<td>교수학습지원센터</td>
								<td>직원</td>
								<td>교수학습 행정 지원</td>
							</tr>
							<tr>
								<td>담당</td>
								<td>강문선</td>
								<td>교수학습지원센터</td>
								<td>직원</td>
								<td>교수학습 행정 업무보조</td>
							</tr>
							<tr>
								<td>총계</td>
								<td colspan="4">총 4명</td>
				            </tr>
						</tbody>
					</table>
				</div>
			</section>
		</div>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
