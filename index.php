<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_'))
	exit; // 개별 페이지 접근 불가

if (defined('G5_THEME_PATH')) {
	require_once(G5_THEME_PATH . '/index.php');
	return;
}

if (G5_IS_MOBILE) {
	include_once(G5_MOBILE_PATH . '/index.php');
	return;
}

include_once(G5_PATH . '/head.php');
?>


<main>
	<div class="sec sec1" id="sec1">
		<div class="sec_inner">
			<div class="gallery">
				<div class="circle_wrap on">
					<div class="circle_con"></div>
				</div>
				<div class="slider_gallery">
					<div>
						<img src="./img/image/main1.jpg" alt="slide1" />
						<h2>main <span>content</span></h2>
						<button>더보기</button>
					</div>
					<div>
						<img src="./img/image/main2.jpg" alt="slide2" />
						<h2>main <span>content</span></h2>
						<button>더보기</button>
					</div>
					<div>
						<img src="./img/image/main3.jpg" alt="slide3" />
						<h2>main <span>content</span></h2>
						<button>더보기</button>
					</div>
					<div>
						<img src="./img/image/main1.jpg" alt="slide4" />
						<h2>main <span>content</span></h2>
						<button>더보기</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="sec sec2" id="about">
		<div class="sec_inner">
			<div class="tit_wrap">
				<h2>About</h2>
			</div>
			<div class="about" data-aos="fade-up">
				<div class="a1">
					<img src="./img/image/about.png" alt="about" />
				</div>
				<div class="a2">
					<p class="a_con1"> ‘봉만이 여전히 열심히 살고 있구나.’ </span>
					</p>
					<div class="line_right"></div>
					<p class="a_con2">
						봉만이는 빠르진 않지만 꾸준히 하는 성격에 붙여진 저의 별명입니다. <br>
						<span>저는 언제나 경험을 쌓고 건강하게 살기 위해
							꾸준히 하는 일이 몇 가지 있습니다.</span>
						<span>여행, 어학 공부, 자격증 취득, 운동 등과 같이<br>
							삶의 질적 향상을 위한 일을 지속적으로 병행하고 있으며, </span>
						<span>현재는 개발자라는 큰 목표를 갖고 IT관련 6개월 과정을 빠짐없이 출석하여 수료했습니다.</span>
						<span>php, jquery를 사용한 실무 경험이 있으며<br>
							엘리하이 학습관련(클릭, 드래그, 선잇기 등) 디자인팀 협업 및 css, javascript 사용 화면구현 경험이 있습니다.</span>
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="sec sec3" id="certi">
		<div class="sec_inner">
			<div class="tit_wrap">
				<h2>CERTIFICATION</h2>
			</div>
			<ul class="gallery" id="gallery" data-aos="fade-right">
				<li class="gallery_sizer"></li>
				<!-- <li class="gallery_item"></li> -->
			</ul>

			<div class="btn_wrap">
				<button class="load_more" id="load_more">Load more</button>
				<button class="move_page" id="move_page" onclick="goGallery()">Go Gallery</button>
			</div>
			<div id="lightbox" class="hide">
				<span class="close">&times;</span>
				<img id="lightbox_img" src="" alt="Lightbox Image" />
			</div>
		</div>
	</div>

	<div class="sec sec4" id="comment">
		<div class="sec_inner">
			<div class="tit_wrap">
				<h2>COMMENT</h2>
			</div>
			<form id="commentFrm" method="post" data-aos="fade-up">
				<div class="row">
					<span class="con point">이름</span>
					<div class="con_con">
						<input class="con_focus" type="text" id="name" name="name" />
					</div>
				</div>
				<div class="row">
					<span class="con point">연락처</span>
					<div class="con_con">
						<input type="text" id="phone" name="phone" />
					</div>
				</div>
				<div class="row">
					<span class="con point">이메일</span>
					<div class="con_con">
						<input type="text" id="email" name="email" />
					</div>
				</div>
				<div class="row">
					<span class="con point">관계</span>
					<div class="con_con">
						<label class="radio_inline"> <input type="radio" name="type" id="type" value="친구" /> 친구 </label>
						<label class="radio_inline"> <input type="radio" name="type" id="type" value="동료" /> 회사동료 </label>
						<label class="radio_inline"> <input type="radio" name="type" id="type" value="친척" /> 가족/친척 </label>
						<label class="radio_inline"> <input type="radio" name="type" id="type" value="기타" /> 기타 </label>
					</div>
				</div>
				<div class="row contact">
					<span class="con point">내용</span>
					<div class="con_con">
						<textarea name="content" id="content" rows="6"></textarea>
					</div>
				</div>

				<div class="row">
					<input type="submit" class="btn btn_submit" value="Submit " />
					<!-- <input type="button" class="btn btn_cancel" value="Cancel " /> -->
				</div>
			</form>
		</div>
	</div>

	<div class="sec sec5" id="here">
		<div class="sec_inner">
			<div class="tit_wrap">
				<h2>HERE</h2>
			</div>

			<div class="review" data-aos="fade-left">
				<div class="r1">
					<p class="r_con1"> 개발분야 지원자 조봉희입니다.</p>
					<div class="line_left"></div>
					<p class="r_con2"> 취미가 아닌 직업의 전문성을 쌓으며 성장할 수 있는 직종에서 일하고 싶다 희망하였습니다.
						오랜 고민 끝에 도전하게 된 분야가 it 개발입니다. 6개월의 풀스텍 과정을 하루도 빠짐없이 출석하며 팀원들과 함께 프로젝트를 완성하였고 이제는 실전에서 부딪히고 깨지며 단단해질 차례라
						생각합니다. ‘큰 거 한방!’ 보다 ‘소소한 행복은 자주 느껴라’라는 말이 있습니다. 새로운 분야에 도전하는 사람에게도 적용되는 말이 아닐까 생각합니다. 완벽하게 모든 것을 잘하겠다는
						마음가짐보다 하루하루 작은 것부터 이뤄내며 성장하는 모습을 보여드리겠습니다.
				</div>
				<div class="r2">
					<div id="map"></div>
					<!-- <iframe src="https://www.youtube.com/embed/kVxTrhojpFI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
				</div>
			</div>
		</div>
	</div>
</main>





<?php
include_once(G5_PATH . '/tail.php');