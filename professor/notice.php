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
	<main id="content" class="professor notice">
		<div class="container">
			<section class="list">
				<div class="section-header">
					<hr>
					<h3>묻고답하기</h3>
				</div>
                <div class="search-form">
                    <form>
                        <div class="form-group">
                            <select class="form-control">
                                <option value="#">제목</option>
                                <option value="#">제목2</option>
                            </select>
                            <label for="search-keyword" class="sr-only">검색어</label>
                            <input id="search-keyword" type="text" class="form-control">
                        </div>
                        <button type="submit" class="btn">검색</button>
                    </form>
                </div>
				<div class="table-wrap">
					<table class="table table-border">
						<colgroup>
							<col style="width: 120px"/>
							<col style="width: 638px"/>
							<col style="width: 97px"/>
							<col style="width: 110px"/>
							<col style="width: 109px"/>
							<col style="width: 96px"/>
						</colgroup>
						<thead>
							<tr>
								<th>번호</th>
								<th>제목</th>
								<th>파일</th>
								<th>작성자</th>
								<th>작성일</th>
								<th>조회</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>10</td>
								<td><a href="#">NCS기반 교육과정 가이드라인 개정판</a></td>
								<td>
								    <p>
								        <img src="/assets/images/professor/file_img.png" alt="첨부파일">
								    </p>
								</td>
								<td>홍길동</td>
								<td>2016-07-20</td>
								<td>10</td>
							</tr>
							<tr>
								<td>9</td>
								<td>
								<a href="#">NCS기반 교육과정 가이드라인 개정판</a>
								<span><img src="/assets/images/professor/lock.png" alt="비밀글"></span>
								</td>
								<td>
								    <p>
								        <img src="/assets/images/professor/file_img.png" alt="첨부파일">
								    </p>
								</td>
								<td>홍길동</td>
								<td>2016-07-20</td>
								<td>10</td>
							</tr>
							<tr>
								<td>8</td>
								<td><a href="#">NCS기반 교육과정 가이드라인 개정판</a></td>
								<td></td>
								<td>홍길동</td>
								<td>2016-07-20</td>
								<td>10</td>
							</tr>
							<tr>
								<td>7</td>
								<td><a href="#">NCS기반 교육과정 가이드라인 개정판</a></td>
								<td></td>
								<td>홍길동</td>
								<td>2016-07-20</td>
								<td>10</td>
							</tr>
							<tr>
								<td>6</td>
								<td><a href="#">NCS기반 교육과정 가이드라인 개정판</a></td>
								<td></td>
								<td>홍길동</td>
								<td>2016-07-20</td>
								<td>10</td>
							</tr>
							<tr>
								<td>5</td>
								<td><a href="#">NCS기반 교육과정 가이드라인 개정판</a></td>
								<td></td>
								<td>홍길동</td>
								<td>2016-07-20</td>
								<td>10</td>
							</tr>
							<tr>
								<td>4</td>
								<td><a href="#">NCS기반 교육과정 가이드라인 개정판</a></td>
								<td></td>
								<td>홍길동</td>
								<td>2016-07-20</td>
								<td>10</td>
							</tr>
							<tr>
								<td>3</td>
								<td><a href="#">NCS기반 교육과정 가이드라인 개정판</a></td>
								<td></td>
								<td>홍길동</td>
								<td>2016-07-20</td>
								<td>10</td>
							</tr>
							<tr>
								<td>2</td>
								<td><a href="#">NCS기반 교육과정 가이드라인 개정판</a></td>
								<td></td>
								<td>홍길동</td>
								<td>2016-07-20</td>
								<td>10</td>
							</tr>
							<tr>
								<td>1</td>
								<td><a href="#">NCS기반 교육과정 가이드라인 개정판</a></td>
								<td></td>
								<td>홍길동</td>
								<td>2016-07-20</td>
								<td>10</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="btn-area">
				    <p>
				        <a href="#" class="btn btn-red" role="button">글쓰기</a>
				    </p>
				</div>
                <nav class="paging">
					<ul class="pagination">
						<li>
							<a href="#" aria-label="first-Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
						<li>
							<a href="#" aria-label="Previous">
								<span aria-hidden="true">&lsaquo;</span>
							</a>
						</li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li>
							<a href="#" aria-label="Next">
								<span aria-hidden="true">&rsaquo;</span>
							</a>
						</li>
						<li>
							<a href="#" aria-label="end-Next">
								<span aria-hidden="true">&raquo;</span>
							</a>
						</li>
					</ul>
				</nav>
			</section>
		</div>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
