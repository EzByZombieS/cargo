<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true"
	data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}"
	data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}"
	data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
	<div class="aside-logo flex-column-auto" id="kt_aside_logo">
		<a href="#">
			<img alt="Logo" src="{{ asset('img/logo.png') }}" class="h-90px logo" />
		</a>
	</div>
	<div class="aside-menu flex-column-fluid">
		<div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
			data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
			data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
			data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
			@if(Auth::user()->level == 1)
			<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
				id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">
				<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
					<span class="menu-link">
						<span class="menu-icon">
							<span class="svg-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
									viewBox="0 0 24 24" fill="none">
									<rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
									<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
										fill="currentColor" />
									<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
										fill="currentColor" />
									<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
										fill="currentColor" />
								</svg>
							</span>
						</span>
						<span class="menu-title">Dashboards</span>
						<span class="menu-arrow"></span>
					</span>
					<div class="menu-sub menu-sub-accordion menu-active-bg">
						<div class="menu-item">
							<a class="menu-link" href="#">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">Dashboard</span>
							</a>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<div class="menu-content pt-8 pb-2">
						<span class="menu-section text-muted text-uppercase fs-8 ls-1">Apps</span>
					</div>
				</div>
				<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
					<span class="menu-link">
						<span class="menu-icon">
							<span class="svg-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path d="M21 9V11C21 11.6 20.6 12 20 12H14V8H20C20.6 8 21 8.4 21 9ZM10 8H4C3.4 8 3 8.4 3 9V11C3 11.6 3.4 12 4 12H10V8Z" fill="currentColor"></path>
									<path d="M15 2C13.3 2 12 3.3 12 5V8H15C16.7 8 18 6.7 18 5C18 3.3 16.7 2 15 2Z" fill="currentColor"></path>
									<path opacity="0.3" d="M9 2C10.7 2 12 3.3 12 5V8H9C7.3 8 6 6.7 6 5C6 3.3 7.3 2 9 2ZM4 12V21C4 21.6 4.4 22 5 22H10V12H4ZM20 12V21C20 21.6 19.6 22 19 22H14V12H20Z" fill="currentColor"></path>
								</svg>
							</span>
						</span>
						<span class="menu-title">Manifest</span>
						<span class="menu-arrow"></span>
					</span>
					<div class="menu-sub menu-sub-accordion menu-active-bg">
						<div class="menu-item">
							<a class="menu-link" href="{{ route('inbound.index') }}">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">Manifest InBound</span>
							</a>
						</div>
						<div class="menu-item">
							<a class="menu-link" href="{{ route('outbound.index') }}">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">Manifest OutBound</span>
							</a>
						</div>
					</div>
				</div>
				<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
					<a href="{{ route('schedule.index') }}"><span class="menu-link">
						<span class="menu-icon">
							<!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
							<span class="svg-icon svg-icon-2">
								<i class="bi bi-calendar-check fs-2"></i>
							</span>
							<!--end::Svg Icon-->
						</span>
						<span class="menu-title">Jadwal</span>
					</span></a>
				</div>
			</div>	
			@else
			<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
				id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">
				<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
					<span class="menu-link">
						<span class="menu-icon">
							<span class="svg-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
									viewBox="0 0 24 24" fill="none">
									<rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
									<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
										fill="currentColor" />
									<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
										fill="currentColor" />
									<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
										fill="currentColor" />
								</svg>
							</span>
						</span>
						<span class="menu-title">Dashboards</span>
						<span class="menu-arrow"></span>
					</span>
					<div class="menu-sub menu-sub-accordion menu-active-bg">
						<div class="menu-item">
							<a class="menu-link" href="#">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">Dashboard</span>
							</a>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<div class="menu-content pt-8 pb-2">
						<span class="menu-section text-muted text-uppercase fs-8 ls-1">Apps</span>
					</div>
				</div>
				<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
					<a href="{{ route('cargo.index') }}"><span class="menu-link">
						<span class="menu-icon">
							<!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
							<span class="svg-icon svg-icon-2">
								<i class="bi bi-calendar-check fs-2"></i>
							</span>
							<!--end::Svg Icon-->
						</span>
						<span class="menu-title">Cargo</span>
					</span></a>
				</div>
				<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
					<a href="{{ route('manifest.index') }}"><span class="menu-link">
						<span class="menu-icon">
							<!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
							<span class="svg-icon svg-icon-2">
								<i class="bi bi-calendar-check fs-2"></i>
							</span>
							<!--end::Svg Icon-->
						</span>
						<span class="menu-title">Manifest</span>
					</span></a>
				</div>
			</div>	
			@endif
			<!--end::Menu-->
		</div>
		<!--end::Aside Menu-->
	</div>
	<!--end::Aside menu-->
	
</div>