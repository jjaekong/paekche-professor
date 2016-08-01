<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php'); ?>
<link rel="stylesheet" href="/assets/css/professor.css">
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
				<li><a href="#">교수지원</a></li>
				<!-- li class="active">수업자료실</li -->
				<li class="active dropdown">
					<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">묻고답하기<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">교수지원공지사항</a></li>
						<li><a href="#">Teaching Tips</a></li>
						<li><a href="#">자료실</a></li>
						<li><a href="/professor/notice.php">묻고답하기</a></li>
					</ul>
				</li>
			</ol>
		</div>
	</div>
	<main id="content" class="professor confirm-pw">
		<div class="container">
			<section class="confirm-pw">
				<div class="section-header">
                    <hr>
				    <h3>묻고답하기</h3>
				</div>
                <div class="section-content">
                    <form>
                        <h2>비밀번호를 입력해주세요</h2>
                        <p>게시글 작성시 입력하셨던 비밀번호를 입력해주세요</p>
                        <label for="user-pw" class="sr-only">비밀번호입력</label>
                        <input type="password" id="user-pw">
                        <div class="btn-area">
                            <p>
                                <button type="submit" class="btn btn-gray">확인</button>
                            </p>
                        </div>
                    </form>
                </div>
			</section>
		</div>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
