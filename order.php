<?php include_once 'header.php'; ?>
<div id="main-page-content">
	<div class="container">
		  <!-- Example row of columns -->
		<div id="banner-pricing">
			<!-- PRINTED -->
			<table class="table-area-printed-half uk-table uk-table-bordered js-pricing-table" data-pricing-tbl="" style="display:none;">
				<caption class="uk-margin-bottom js-wb-caption">Pricing for <span class="style">Printed</span> wristbands (<span class="size">1/2</span>&quot;) as of July, 2016</caption>
				<thead>
					<tr>
					<th data-uk-tooltip="{pos:'top'}" title="Quantity" class="uk-text-primary">Qty</th>
					<th data-uk-tooltip="{pos:'top'}" title="20 to 49">20</th>
					<th data-uk-tooltip="{pos:'top'}" title="50 to 99">50</th>
					<th data-uk-tooltip="{pos:'top'}" title="100 to 199">100</th>
					<th data-uk-tooltip="{pos:'top'}" title="200 to 299">200</th>
					<th data-uk-tooltip="{pos:'top'}" title="300 to 499">300</th>
					<th data-uk-tooltip="{pos:'top'}" title="500 to 999">500</th>
					<th data-uk-tooltip="{pos:'top'}" title="1000 to 1999">1,000</th>
					<th data-uk-tooltip="{pos:'top'}" title="2000 to 2999">2,000</th>
					<th data-uk-tooltip="{pos:'top'}" title="3000 to 4999">3,000</th>
					<th data-uk-tooltip="{pos:'top'}" title="5000 to 9999">5,000</th>
					<th data-uk-tooltip="{pos:'top'}" title="10000 to 19999">10,000</th>
					<th data-uk-tooltip="{pos:'top'}" title="20000 to 49999">20,000</th>
					<th data-uk-tooltip="{pos:'top'}" title="50000 to 99999">50,000</th>
					<th data-uk-tooltip="{pos:'top'}" title="100000 to 199999">100,000</th>
					</tr>
				</thead>
				<tbody>
					<tr id="priceTable">
						<td class="uk-text-primary">Price</td>
					</tr>
				</tbody>
			</table>
			<!-- END BLANK STYLE -->
		</div>
		<!-- WRIST STYLE -->
		<div class="wrist-style">
			<div class="row offer-bar margin-bootom-20 __web-inspector-hide-shortcut__">
				<div class="col-xs-3 col-sm-2 offerpv float-left">Step <span class="sRename">1</span></div>
				<div class="col-xs-9 col-sm-10 offer-details float-left">Select Wristband Style </div>
					<div class="clearfix"></div>
			</div>
			<div class="wrist_style_container">
				<div class="col-md-4 prod js-style"  value="printed">
				  <div class="box-thumb"><img src="assets/images/src/Printed.png"></div>
				  <input type="radio" name="wrist_style" id="printed" class="wrist_style" value="printed" data-style="imprinted">
				  <h2>Printed</h2>
				</div>
				<div class="col-md-4 prod js-style"  value="debossed">
				  <div class="box-thumb"><img src="assets/images/src/Debossed.png"></div>
				  <input type="radio" name="wrist_style" id="debossed" class="wrist_style" value="debossed" data-style="debossed">
				  <h2>Debossed</h2>
				</div>
				<div class="col-md-4 prod js-style"  value="ink-injected">
				  <div class="box-thumb"><img src="assets/images/src/Color-Filled.png"></div>
				  <input type="radio" name="wrist_style" id="ink-injected" class="wrist_style" value="ink-injected" data-style="color-filled">
				  <h2>Ink Injected</h2>
				</div>
				<div class="col-md-4 prod js-style"  value="embossed">
				  <div class="box-thumb"><img src="assets/images/src/Embossed.png"></div>
				  <input type="radio" name="wrist_style" id="embossed" class="wrist_style" value="embossed" data-style="embossed">
				  <h2>Embossed</h2>
				</div>
				<div class="col-md-4 prod js-style"  value="dual-layer">
				  <div class="box-thumb"><img src="assets/images/src/Dual-Layer.png"></div>
				  <input type="radio" name="wrist_style" id="dual-layer" class="wrist_style" value="dual-layer" data-style="dual-layer">
				  <h2>Dual layer</h2>
				</div>
				<div class="col-md-4 prod js-style" value="embossed-printed">
				  <div class="box-thumb"><img src="assets/images/src/Embossed-Printed.png"></div>
				   <input type="radio" name="wrist_style" id="embossed-printed" class="wrist_style" value="embossed-printed" data-style="embossed-printed">
				  <h2>Embossed Printed</h2>
				</div>
				<div class="col-md-4 prod js-style" value="figured">
				  <div class="box-thumb"><img src="assets/images/src/Figured.png"></div>
				   <input type="radio" name="wrist_style" id="figured" class="wrist_style" value="figured" data-style="figured">
				  <h2>Figured</h2>
				</div>
				<div class="col-md-4 prod js-style" value="blank-style">
				  <div class="box-thumb"><img src="assets/images/src/Blank.png"></div>
				   <input type="radio" name="wrist_style" id="blank-style" class="wrist_style" value="blank-style" data-style="blank">
				  <h2>Blank</h2>
				</div>
			</div>
				<div class="clearfix"></div>
				<input type="hidden" name="style_info" class="style_info">
		</div>
		<!-- END WRIST STYLE -->
			<div class="clearfix"></div>
		<!-- WRIST SIZE -->

		<div class="wrist-size">
			<div class="row offer-bar margin-bootom-20 __web-inspector-hide-shortcut__">
				<div class="col-xs-3 col-sm-2 offerpv float-left">Step <span class="sRename">2</span></div>
				<div class="col-xs-9 col-sm-10 offer-details float-left">Select Wristband Size </div>
					<div class="clearfix"></div>
			</div>
			<div class="wsize-default">
				<div class="col-md-4 prod-size js-size">
				  <div class="box-thumb"><img src="assets/images/src/sizes/1-4.png"></div>
				  <input type="radio" name="wrist_size"  class="wrist_size" value="1/4" data-size="1/4">
				  <h2>1/4 Inch</h2>
				</div>
				<div class="col-md-4 prod-size js-size">
				  <div class="box-thumb"><img src="assets/images/src/sizes/1-2.png"></div>
				  <input type="radio" name="wrist_size" class="wrist_size" value="1/2" data-size="1/2">
				  <h2>1/2 Inch</h2>
				</div>
				<div class="col-md-4 prod-size js-size">
				  <div class="box-thumb"><img src="assets/images/src/sizes/3-4.png"></div>
				  <input type="radio" name="wrist_size"  class="wrist_size" value="3/4" data-size="3/4">
				  <h2>3/4 Inch</h2>
				</div>
				<div class="col-md-4 prod-size js-size">
				  <div class="box-thumb"><img src="assets/images/src/sizes/1.png"></div>
				  <input type="radio" name="wrist_size"  class="wrist_size" value="1" data-size="1">
				  <h2>1 Inch</h2>
				</div>
				<div class="col-md-4 prod-size js-size">
				  <div class="box-thumb"><img src="assets/images/src/sizes/11-2.png"></div>
				  <input type="radio" name="wrist_size"  class="wrist_size" value="1 1/2" data-size="1 1/2">
				  <h2>1 1/2 Inch</h2>
				</div>
				<div class="col-md-4 prod-size js-size">
				  <div class="box-thumb"><img src="assets/images/src/sizes/2.png"></div>
				   <input type="radio" name="wrist_size" class="wrist_size" value="2" data-size="2">
				  <h2>2 Inch</h2>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- END WRIST SIZE -->
		<!-- WRIST COLOR -->
		<div class="wrist-color-quantity">
			<div class="row offer-bar margin-bootom-20 __web-inspector-hide-shortcut__">
				<div class="col-xs-3 col-sm-2 offerpv float-left">Step <span class="sRename">3</span></div>
				<div class="col-xs-9 col-sm-10 offer-details float-left">Select Wristband Color and  Quantity <i>(*Minimum of 20)</i> </div>
					<div class="clearfix"></div>
			</div>
			<div id="wrist_color_container">

				  <ul class="nav nav-pills js-colors">
					<li class="active"><a data-toggle="pill" data-value="0" href="#home">Solid</a></li>
					<li><a data-toggle="pill" href="#segmented" data-value="0.01">Segmented</a></li>
					<li><a data-toggle="pill" href="#swirls" data-value="0.01">Swirls</a></li>
					<li><a data-toggle="pill" href="#glow" data-value="0.03">Glow</a></li>
				  </ul>

				  <div class="tab-content">
					<div id="home" class="tab-pane fade in active">
					  <h3>Solid Colors</h3>
					  <div id="main-color-content">
					  <div class="col-xs-4 box-color">
							<img src="assets/images/src/custom.png"/>
							<div class="custom_pick"><input type='text' class="my_color" /></div>
							<div class="clearfix"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/black-debossed.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/brown-debossed.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/cambridge-blue.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/cornflower-blue.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/fluorescent-blue-debossed.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/green-debossed-wristbands.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/grey-debossed-wristbands.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/hot-pink-debossed-wristbands.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/hunter-green-debossed-wristbands.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/lavender.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>

							<div class="clearfix"></div>
					  </div>
					</div>
					<div id="segmented" class="tab-pane fade">
					  <h3>Segmented Colors</h3>
					  <div id="main-color-content">
					     <div class="col-xs-4 box-color">
							<img src="assets/images/src/custom.png"/>
							<div class="custom_pick">
								<input type='text' class='my_color1_segmented'/>
								<input type='text' class='my_color2_segmented'/>
							</div>
							<div class="clearfix"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlackGreen.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="clearfix"></div>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlackHotPink.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlackMetallicGold.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlackMetallicSilver.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlackOrange.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlackPANTONE267.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlackReflexBlue.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlackWhite.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlackYellow.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlueGrey.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlueHotPink.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlueLightBlue.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BluePANTONE267Red.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/GreenRedYellow.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/GreenReflexBlue.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/HotPinkBlackBlue.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/HotPinkLightBlue.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/LightPinkHotPink.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/MaroonGrey.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/OrangeBlue.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/PANTONE103.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/PANTONE376.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RainbowSegmented.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedBlack.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedBlackYellow.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedBlue.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedBlueHotPink.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedBlueYellow.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedGreen.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedGrey.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedHotPink.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedPANTONE267Black.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedPANTONE7459.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedPink.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedWhiteBlue.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedWhiteGreen.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedYellow.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteBlackOrange.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteBlue.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteBluePANTONE267.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteBrown.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteGreen.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteGrey.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteHotPink.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteLightBlue.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteLimeGreen.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteOrange.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhitePANTONE528.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhitePink.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteRed.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteTeal.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/YellowBlue.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
							<div class="clearfix"></div>
					 </div>
					</div>
					<div id="swirls" class="tab-pane fade">
					  <h3>Swirls</h3>
					  <div id="main-color-content">
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/BlackGreen.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/BlackGrey.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/BlackHotPink.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/BlackPANTONE267.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/BlackRed.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/BlackWhite.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/BlackYellow.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/BlueLimeGreen.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/BlueWhite.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/DarkGreenWhite.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/DesertCamo.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/GreenCamo.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/HotPinkLightBlue.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/HotPinkLightBlueLimeGreen.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/DarkGreenWhite.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/LimeGreenYellowLightBlue.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/MaroonGrey.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/OrangeWhite.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/PANTONE267White.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/PinkPANTONE267.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/RainbowSwirl.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/RedBlackBlue.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/RedGreen.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/RedGrey.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/RedWhite.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/RedWhiteBlue.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/RedYellow.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/ReflexBlueBlack.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/ReflexBlueGrey.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/TealWhite.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/WhiteBlackGreen.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>

							<div class="clearfix"></div>
					  </div>
					</div>
					<!-- End Swirl -->
					<div id="glow" class="tab-pane fade">
					  <h3>Glow</h3>
					  <div id="main-color-content">
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/glow/GlowDarkBLUE.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="text" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="text" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="text" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/glow/GlowDarkGREEN.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="text" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="text" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="text" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/glow/GlowDarkPINK.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="text" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="text" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="text" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/glow/GlowDarkPURPLE.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="text" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="text" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="text" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/glow/GlowDarkPURPLE.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="text" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="text" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="text" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
					  </div>
					</div>
					<!-- End Glow Color -->
				  </div>
				  <!--	End Tab Content -->
				</div>
			</div>
			<!-- End Wrist-color-quantity -->

			<div class="wrist-messsage">
				<div class="row offer-bar margin-bootom-20 __web-inspector-hide-shortcut__">
					<div class="col-xs-3 col-sm-2 offerpv float-left">Step <span class="sRename">4</span></div>
					<div class="col-xs-9 col-sm-10 offer-details float-left">Enter Message for preview</div>
						<div class="clearfix"></div>
				</div>
				<div class="main-content-preview">
					<div id="text-design">
						<h3>INPUT TEXT DESIGN MESSAGE</h3>
					</div>
					<div id="band-text" class="margin-div">
						Front Text: &nbsp;<input type="text" name="front-text" class="band-text" value=""  placeholder="Enter Front Message"> &nbsp; &nbsp; &nbsp; &nbsp;
						Back Text: &nbsp;<input type="text" name="back-text" class="band-text" value="" placeholder="Enter Back Message"> </br></br>
						Inside Text: &nbsp;<input type="text" name="inside-text" class="band-text" value=""  placeholder="Enter Inner Message">

					</div>

					<h3>PREVIEW</h3>
					<div id="preview-pane">
						<div id="front-view" class="band">
							<div class="preview-text faded" id="front-text">
								Front Text
							</div>
						</div>
						<div id="back-view" class="band">
							<div class="preview-text faded" id="back-text">
								Back Text
							</div>
						</div>
						<div class="clearfix">
							<div id="inside-view" class="band">
								<div class="preview-text faded" id="inside-text">
									Inside Text
								</div>
							</div>
						</div>
					</div>
					<!--end preview pan -->
					<div id="add-design">
					<form id="myform">
							<!--<button>Clear</button>-->
							<h3>Select Font Style</h3>
							<select id="fs">
								<option value="Arial">Arial</option>
								<option value="Verdana ">Verdana </option>
								<option value="Impact ">Impact </option>
								<option value="Comic Sans MS">Comic Sans MS</option>
								<option value="Calibri">Calibri</option>
								<option value="Century Gothic">Century Gothic</option>
							</select>

							<select id="size">
								<option value="7">7</option>
								<option value="10">10</option>
								<option value="20">20</option>
								<option value="30">30</option>
							</select>
						</form>

						<br/>

						<div id="container" class="changeMe">
							<div id="float">
								<p>
									Sample text
								</p>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- END WRISTBAND MESSAGE -->

			<!-- ADD ONS -->
			<div class="product-add-ons">
				<div class="row offer-bar margin-bootom-20 __web-inspector-hide-shortcut__">
					<div class="col-xs-3 col-sm-2 offerpv float-left">Step <span class="sRename">5</span></div>
					<div class="col-xs-9 col-sm-10 offer-details float-left">ADD ONS (Optional)</i> </div>
						<div class="clearfix"></div>
				</div>
				<div class="col-md-4 add-ons">
				  <div class="box-thumb"><img src="assets/images/src/extra.png"></div>
				  <div class="add-ons-radio">
					  <input type="radio" name="add-ons-extra"  class="add-ons" value="1.99">
					  <h2>Individually Wrap</h2>
				  </div>
				</div>
			</div>
			<!-- total -->
			<div class="clearfix"></div>
			<div class="total-area">
				<div class="js-total" style="display:none;">
					<div class="col-md-4">
					   <h5>Production Time</h5>
						<select name="ProductionTime" id="ProductionTime" class="uk-form-large uk-width-1-1 js-production-options" data-title="Production" required="" data-validation-error="Please select production time." data-validation-slide-pos="production-shipping">
							<option value="0">Select Production Time…</option>
							<option value="2" data-price="4.99">Rush Production - 2 Days (+$4.99)</option>
							<option value="4" data-price="4.90">Standard Production - 4 Days (+$4.90)</option>
							<option value="7" data-price="0.00">Standard Production - 7 Days (+$0.00)</option>
						</select>
						<div style="padding-top:10px;"></div>
						<h5>Shipping Time</h5>
							<select name="Delivery" id="ShippingTime" class="uk-form-large uk-width-1-1 js-shipping-options" data-title="Shipping" required="" data-validation-error="Please select shipping time." data-validation-slide-pos="production-shipping">
								<option value="0">Select Shipping Time…</option>
								<option value="2" data-price="19.84">Rush Shipping - 2 Days (+$19.84)</option>
								<option value="4" data-price="6.84">Standard Shipping - 4 Days (+$6.84)</option>
								<option value="6" data-price="5.89">Standard Shipping - 6 Days (+$5.89)</option>
								<option value="7" data-price="15.79">International Shipping - 7 Days (+$15.79)</option>
							</select>
					</div>

					<div class="col-md-4" id="summary-order">
					<div id="order-summary">
						<span id="order_title"></span> <br />
						<span id="style_name"></span>
						<span id="qty_style"></span>
					</div>
					<h1>Total: <span id="totalPrice"></span></h1>
					</div>
					<div class="col-md-4">

					  <div class="button-cart">
						<button>Add to Cart</button>
					  </div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="js-no-total">
					<h1>Minimum order should be at least <u>20 pieces.</u></h1>
				</div>
			</div>
			<!-- total -->
		</div>
	</div>
</div>

<?php include_once 'footer.php'; ?>
