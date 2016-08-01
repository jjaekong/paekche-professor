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
				<li><a href="#">학습지원</a></li>
				<!-- li class="active">수업자료실</li -->
				<li class="active dropdown">
					<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">튜터링 프로그램<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">학습지원공지사항</a></li>
						<li><a href="/learning/appraisal.php">직업기초 및 기초학습능력진단</a></li>
						<li><a href="/learning/seminar.php">학습법세미나</a></li>
						<li><a href="/learning/tutoring.php">튜터링프로그램</a></li>
						<li><a href="#">자료실</a></li>
						<li><a href="#">묻고답하기</a></li>
					</ul>
				</li>
			</ol>
		</div>
	</div>
	<main id="content" class="learning support tutoring">
		<div class="container">
			<section class="appraisal">
				<div class="section-header">
					<hr>
					<h3>튜터링 프로그램</h3>
				</div>
                <h4>목적</h4>
                <ul class="dott-list">
                    <li>
                        대학 내 다양 자기주도적(SDL:Self-Directed Learning) 학습조직인 스터디 그룹에 대한 지원을 통하여, 재학생들의 전공 및 교양분야에 대한 학업 성취 능력을 향상
                    </li>
                    <li>
                        학생들 간의 상호작용을 통해 심층학습을 유도하여 학습동기를 증진
                    </li>
                    <li>
                        지속적인 학습의 생활화를 통해 대학의 학습문화 창출
                    </li>
                </ul>
                <h4>방법</h4>
                <ul class="dott-list">
                    <li>
                        <dl class="inline-dl">
                            <dt>대상</dt>
                            <dd>재학생 전체</dd>
                        </dl>
                    </li>
                    <li>
                        <dl class="inline-dl">
                            <dt>운영방법</dt>
                            <dd>
                                지도교수가 선임된 구성인원은 튜터(1명) + 튜티(2~4명)의 튜터링 프로그램 활동비 지원
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <dl class="inline-dl">
                            <dt>장소</dt>
                            <dd>
                                자기주도 학습공동체, 전공 튜터링, 전공동아리
                            </dd>
                        </dl>
                    </li>
                </ul>
                <h4>절차</h4>
                <ul class="procedure">
                    <li>
                        <h5>기획</h5>
                        <ul class="dott-list">
                            <li>스터디그룹 세부<br>운영계획 논의</li>
                        </ul>
                    </li>
                    <li>
                        <h5>공지 및 신청접수</h5>
                        <ul class="dott-list">
                            <li>안내문 및 홍보물 부탁</li>
                            <li>참여유도를 위해 학과<br>협조요청</li>
                            <li>대학 및 센터 홈페이지<br>공지</li>
                        </ul>
                    </li>
                    <li>
                        <h5>오리엔테이션</h5>
                        <ul class="dott-list">
                            <li>스터디그룹 운영내용<br>및 공지사항 전달</li>
                        </ul>
                    </li>
                    <li>
                        <h5>스터디그룹활동</h5>
                        <ul class="dott-list">
                            <li>주 1회이상 활동 후<br>활동보고서 작성</li>
                        </ul>
                    </li>
                    <li>
                        <h5>중간평가</h5>
                        <ul class="dott-list">
                            <li>중간활동보고서 및<br>주간활동보고서 제출</li>
                        </ul>
                    </li>
                    <li>
                        <h5>스터디그룹활동 종료</h5>
                        <ul class="dott-list">
                            <li>최종활동보고서 제출</li>
                            <li>만족도 조사실시</li>
                            <li>운영결과보고서 작성</li>
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
