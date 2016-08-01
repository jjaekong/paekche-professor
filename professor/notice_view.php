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
	<main id="content" class="professor notice-view">
		<div class="container">
			<section class="view">
				<div class="section-header">
					<hr>
					<h3>묻고답하기</h3>
				</div>
                <article class="view-comment">
				    <header>
				        <h4>2015년 특성화전문대학육성사업 우수성과 사례로 백제예술대학 선정</h4>
				        <ul>
				            <li>
				                <ul>
				                    <li>
				                        <dl class="inline-dl">
				                            <dt>작성자</dt>
				                            <dd>홍길동</dd>
				                        </dl>
				                    </li>
				                    <li>
				                        <dl class="inline-dl">
				                            <dt>작성일</dt>
				                            <dd>2016-07-20</dd>
				                        </dl>
				                    </li>
				                    <li>
				                        <dl class="inline-dl">
				                            <dt>조회수</dt>
				                            <dd>1,000</dd>
				                        </dl>
				                    </li>
				                </ul>
				            </li>
				            <li>
				                <dl class="inline-dl">
				                    <dt>첨부파일</dt>
				                    <dd><a href="#">abc.hwp</a></dd>
				                    <dd><a href="#">abc.hwp</a></dd>
				                    <dd><a href="#">abc.hwp</a></dd>
				                </dl>
				            </li>
				        </ul>
				    </header>
				    <div class="article-content">
				        게시판 내용
				    </div>
				    <div class="btn-area">
				        <p>
				            <a href="#" class="btn btn-red" role="button">목록</a>
				        </p>
				    </div>
				    <div class="comment">
                        <h3>COMMENT</h3>
                        <div class="comment-write">
                            <form>
                                <label for="user-name">이름</label>
                                <input type="text" id="user-name">
                                <label for="user-pw">패스워드</label>
                                <input type="password" id="user-pw">
                                <label for="comment-content" class="sr-only"></label>
                                <textarea id="comment-content"></textarea>
                                <div class="btn-area">
                                    <p>
                                        <a href="#" class="btn btn-green" role="button">글쓰기</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                    <ul class="comment-view">
                        <li>
                            <h4>abc111 <span class="date">2016-03-27 오후 6:00:00</span></h4>
                            <p>댓글내용입니다. 댓글내용입니다. 댓글내용입니다. 댓글내용입니다. 댓글내용입니다. 댓글내용입니다.</p>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn" role="button"><img src="/assets/images/professor/comment_btn01.png" alt="글쓰기"></a>
                                    <a href="#" class="btn" role="button"><img src="/assets/images/professor/comment_btn02.png" alt="글삭제"></a>
                                </p>
                            </div>
                        </li>
                        <li>
                            <h4>abc111 <span class="date">2016-03-27 오후 6:00:00</span></h4>
                            <p>댓글내용입니다. 댓글내용입니다. 댓글내용입니다. 댓글내용입니다. 댓글내용입니다. 댓글내용입니다.</p>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn" role="button"><img src="/assets/images/professor/comment_btn01.png" alt="글쓰기"></a>
                                    <a href="#" class="btn" role="button"><img src="/assets/images/professor/comment_btn02.png" alt="글삭제"></a>
                                </p>
                            </div>
                        </li>
                        <li>
                            <h4>abc111 <span class="date">2016-03-27 오후 6:00:00</span></h4>
                            <p>댓글내용입니다. 댓글내용입니다. 댓글내용입니다. 댓글내용입니다. 댓글내용입니다. 댓글내용입니다.</p>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn" role="button"><img src="/assets/images/professor/comment_btn01.png" alt="글쓰기"></a>
                                    <a href="#" class="btn" role="button"><img src="/assets/images/professor/comment_btn02.png" alt="글삭제"></a>
                                </p>
                            </div>
                        </li>
                    </ul>
				</article>
			</section>
		</div>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
