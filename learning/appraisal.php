<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php'); ?>
<link rel="stylesheet" href="/assets/css/learning.css">
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
					<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">직업기초 및 기초학습능력진단<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">학습지원공지사항</a></li>
						<li><a href="/learning/appraisal.php">직업기초 및 기초학습능력진단</a></li>
						<li><a href="#">학습법세미나</a></li>
						<li><a href="#">튜터링프로그램</a></li>
						<li><a href="#">자료실</a></li>
						<li><a href="#">묻고답하기</a></li>
					</ul>
				</li>
			</ol>
		</div>
	</div>
	<main id="content" class="learning appraisal">
		<div class="container">
			<section class="appraisal">
				<div class="section-header">
					<hr>
					<h3>직업기초 및 기초학습능력진단</h3>
				</div>
                <h4>목적</h4>
                <ul class="dott-list">
                    <li>신입생을 대상을 직업교육을 학습하는데 필요한 기초학력 성취수준 및 학습태도를 종합적으로 진단</li>
                    <li>
                        진단결과를 토대로 교육과정 및 교수학습방법을 효과적으로 개선하고, 직업교육의 정책을 수립하는데 기초 자료로 활용
                    </li>
                    <li>
                        향후 신입생들에게 부족한 국어, 영어, 수학 교과영역의 기초학습을 강화하고, 자기주도적 학습태도의 향상을 체계적으로 지원하는데 활용하고자 함.
                    </li>
                </ul>
                <h4>방법</h4>
                <ul class="dott-list">
                    <li>
                        <dl class="inline-dl">
                            <dt>대상</dt>
                            <dd>신입생 전체</dd>
                        </dl>
                    </li>
                    <li>
                        <dl class="inline-dl">
                            <dt>운영방법</dt>
                            <dd>
                                대학에서 개발된 기초학력수준(중·고등학교 전반 수준의 국어, 영어, 수학), 자기주도적 학습태도(GHC-LAD), 직업기초역량 진단도구(GHC-VCC)를 활용하여 학과별로 실시
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <dl class="inline-dl">
                            <dt>결과활용</dt>
                            <dd>
                                학과, 교무처, 정보전산원, 산학협력취업처에 결과통보 후 학습법, 직업기초, 진로지도, 학습상담 등 관련 프로그램 연계
                            </dd>
                        </dl>
                    </li>
                </ul>
                <h4>절차</h4>
                <ul class="procedure">
                    <li>
                        <h5>사전준비</h5>
                        <ul class="dott-list">
                            <li>학과별 협조 요청</li>
                            <li>진단평가일정 조정</li>
                        </ul>
                    </li>
                    <li>
                        <h5>진단평가실시</h5>
                        <ul class="dott-list">
                            <li>자체계발한 기초학력<br>수준(국어, 영어, 수학)</li>
                            <li>자기주도적 학습태도</li>
                            <li>직업기초 역량진단도구<br>활용하여 진단평가실시</li>
                        </ul>
                    </li>
                    <li>
                        <h5>결과분석의뢰</h5>
                        <ul class="dott-list">
                            <li>외부 전문기관에<br>결과분석 의뢰</li>
                        </ul>
                    </li>
                    <li>
                        <h5>평가</h5>
                        <ul class="dott-list">
                            <li>학과, 교무처,<br>정보전산원,<br>산학협력취업체에<br>결과통보</li>
                        </ul>
                    </li>
                </ul>
			</section>
		</div>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
