<footer class="bg6 p-t-45 p-b-43 p-l-65 p-r-65 p-lr-0-xl1">
		<div class="flex-w p-b-90" style="justify-content: center">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon6">
				<h4 class="s-text12 p-b-30">
					Thông tin liên hệ
				</h4>

				<div>
					<p class="s-text7 w-size26">
						Any questions? Let us know in store at 273 An Duong Vuong, Ward 3, District 5, Tp. Ho Chi Minh or call us on (+84)337309900
					</p>

					<div class="flex-m p-t-30">
						<a href="{{Request::url()}}" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
						<a href="{{Request::url()}}" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
						<a href="{{Request::url()}}" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
						<a href="{{Request::url()}}" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
						<a href="{{Request::url()}}" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
					</div>
				</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon7">
				<h4 class="s-text12 p-b-30">
					Hãng xe
				</h4>

				<ul>
					@foreach($hang as $h)
					<li class="p-b-9">
						<a href="{{route('sanphamtheohang',$h->mahang)}}" class="s-text7">
							{{$h->tenhang}}
						</a>
					</li>
					@endforeach
					
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon7">
				<h4 class="s-text12 p-b-30">
					Links
				</h4>

				<ul>

					<li class="p-b-9">
						<a href="{{route('lienhe')}}" class="s-text7">
							Liên hệ
						</a>
					</li>

					<!--
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Returns
						</a>
					</li>-->
				</ul>
			</div>

			<!--
			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon7">
				<h4 class="s-text12 p-b-30">
					Help
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Track Order
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Returns
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Shipping
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							FAQs
						</a>
					</li>
				</ul>
			</div>


			<div class="w-size8 p-t-30 p-l-15 p-r-15 respon6">
				<h4 class="s-text12 p-b-30">
					Newsletter
				</h4>

				<form>
					<div class="effect1 w-size9">
						<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
						<span class="effect1-line"></span>
					</div>

					<div class="w-size2 p-t-20">
						Button
						<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
							Subscribe
						</button>
					</div>
				
				</form>
			</div>
			-->
		</div>

		<div class="t-center p-l-15 p-r-15">
			<a href="{{Request::url()}}">
				<img class="h-size2" src="source/images/icons/paypal.png" alt="IMG-PAYPAL">
			</a>

		</div>
	</footer>