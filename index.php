<!DOCTYPE html>
<html>
<head>	
	
<?php include_once('_meta.php'); ?>

</head>

<body class="index">
<div class="wrap">

	<div class="kv">
		<?php include_once('_header.php'); ?>

			<h1 class="txt">
				Tell us when you start and finish your job<br>
				we tell you how much you make
			</h1>

		<div class="bg imgLiquid">
			<img src="theme/tw/images/kv.png">
		</div>
		<div class="grid"></div>
	</div>

	<div class="main">
		<div class="content">
			<div class="myform fixed">
				<form action="">
					<h2 class="form_hd">
						Calculate your weekly salary
					</h2>
					
					<div class="form_bd">
						<div class="con">
							<dl>
								<dt><h3 class="tit">weekly working hours</h3></dt>
								<dd class="select_hour">
									<label for="hour1">
										<input type="radio" name="hour" id="hour1">
										<span>20hours / School year</span>
									</label>

									<label for="hour2">
										<input type="radio" name="hour" id="hour2">
										<span>40hours / Holiday</span>
									</label>
								</dd>
							</dl>
							
							<dl>
								<dt><h3 class="tit">your job</h3></dt>
								<dd>
									<div class="select1" id="select_job" onchange="show_tb();">
										<select name="" id="">
											<option value="">Choose ...</option>
											<option value="Administrative Assistant">Administrative assistant</option>
											<option value="Barista">Barista</option>
											<option value="Bookkeeper">Bookkeeper</option>
											<option value="Child Care">Child care</option>
											<option value="Finance Accountant">Finance accountant</option>
											<option value="Gardener">Gardener</option>
											<option value="Office Cleaner">Office cleaner</option>
											<option value="Receptionist">Receptionist</option>
											<option value="Travel Agency Agent">Travel agency agent</option>
											<option value="Waiter">Waiter</option>
										</select>
									</div>
								</dd>
							</dl>
						</div>

						<div class="con">
							<dl>
								<dt><h3 class="tit rate_tit">hourly rate ( $ADU )</h3></dt>
								<dd>
									<div class="rate_tb">
										<table>
											<tr>
												<th>Shifts</th><th>Mon-Fri</th><th>Sat</th><th>Sun</th>
											</tr>
											<tr>
												<td>06 AM - 09 PM</td><td>$18.50/hr</td><td>$27.75/hr</td><td>$37.00/hr</td>
											</tr>
											<tr>
												<td>09 AM - 12 PM</td><td>$20.50/hr</td><td>$27.75/hr</td><td>$37.00/hr</td>
											</tr>
											<tr>
												<td>12 AM - 06 PM</td><td>$23.13/hr</td><td>$27.75/hr</td><td>$37.00/hr</td>
											</tr>
										</table>
									</div>
								</dd>
							</dl>
						</div>

						<div class="con">
							<dl>
								<dt><h3 class="tit">timesheet</h3></dt>
								<dd>
									<div class="time_tb">
										<table>
											<tr>
												<th>Day</th><th>Start</th><th>Finish</th><th>Total</th>
											</tr>
											<tr>
												<td>Mon</td>
												<td>
  													<input type="number" value="00" min="0" max="12">
													<input type="number" value="00" min="0" max="60">
													<label class="ampm-switch">
														  <input type="checkbox" id="" name="" value="" checked="">
														  <div class="toggle-button"></div>
													</label>
												</td>
												<td>
													<input type="number" value="00" min="0" max="12">
													<input type="number" value="00" min="0" max="60">
													<label class="ampm-switch">
														  <input type="checkbox" id="" name="" value="" checked="">
														  <div class="toggle-button"></div>
													</label>
												</td>
												<td>
													0.0
												</td>
											</tr>
											<tr>
												<td>Tue</td>
												<td>
  													<input type="number" value="00" min="0" max="12">
													<input type="number" value="00" min="0" max="60">
													<label class="ampm-switch">
														  <input type="checkbox" id="" name="" value="" checked="">
														  <div class="toggle-button"></div>
													</label>
												</td>
												<td>
													<input type="number" value="00" min="0" max="12">
													<input type="number" value="00" min="0" max="60">
													<label class="ampm-switch">
														  <input type="checkbox" id="" name="" value="" checked="">
														  <div class="toggle-button"></div>
													</label>
												</td>
												<td>
													0.0
												</td>
											</tr>
											<tr>
												<td>Wed</td>
												<td>
  													<input type="number" value="00" min="0" max="12">
													<input type="number" value="00" min="0" max="60">
													<label class="ampm-switch">
														  <input type="checkbox" id="" name="" value="" checked="">
														  <div class="toggle-button"></div>
													</label>
												</td>
												<td>
													<input type="number" value="00" min="0" max="12">
													<input type="number" value="00" min="0" max="60">
													<label class="ampm-switch">
														  <input type="checkbox" id="" name="" value="" checked="">
														  <div class="toggle-button"></div>
													</label>
												</td>
												<td>
													0.0
												</td>
											</tr>
											<tr>
												<td>Thu</td>
												<td>
  													<input type="number" value="00" min="0" max="12">
													<input type="number" value="00" min="0" max="60">
													<label class="ampm-switch">
														  <input type="checkbox" id="" name="" value="" checked="">
														  <div class="toggle-button"></div>
													</label>
												</td>
												<td>
													<input type="number" value="00" min="0" max="12">
													<input type="number" value="00" min="0" max="60">
													<label class="ampm-switch">
														  <input type="checkbox" id="" name="" value="" checked="">
														  <div class="toggle-button"></div>
													</label>
												</td>
												<td>
													0.0
												</td>
											</tr>
											<tr>
												<td>Fri</td>
												<td>
  													<input type="number" value="00" min="0" max="12">
													<input type="number" value="00" min="0" max="60">
													<label class="ampm-switch">
														  <input type="checkbox" id="" name="" value="" checked="">
														  <div class="toggle-button"></div>
													</label>
												</td>
												<td>
													<input type="number" value="00" min="0" max="12">
													<input type="number" value="00" min="0" max="60">
													<label class="ampm-switch">
														  <input type="checkbox" id="" name="" value="" checked="">
														  <div class="toggle-button"></div>
													</label>
												</td>
												<td>
													0.0
												</td>
											</tr>
											<tr>
												<td>Sat</td>
												<td>
  													<input type="number" value="00" min="0" max="12">
													<input type="number" value="00" min="0" max="60">
													<label class="ampm-switch">
														  <input type="checkbox" id="" name="" value="" checked="">
														  <div class="toggle-button"></div>
													</label>
												</td>
												<td>
													<input type="number" value="00" min="0" max="12">
													<input type="number" value="00" min="0" max="60">
													<label class="ampm-switch">
														  <input type="checkbox" id="" name="" value="" checked="">
														  <div class="toggle-button"></div>
													</label>
												</td>
												<td>
													0.0
												</td>
											</tr>
											<tr>
												<td>Sun</td>
												<td>
  													<input type="number" value="00" min="0" max="12">
													<input type="number" value="00" min="0" max="60">
													<label class="ampm-switch">
														  <input type="checkbox" id="" name="" value="" checked="">
														  <div class="toggle-button"></div>
													</label>
												</td>
												<td>
													<input type="number" value="00" min="0" max="12">
													<input type="number" value="00" min="0" max="60">
													<label class="ampm-switch">
														  <input type="checkbox" id="" name="" value="" checked="">
														  <div class="toggle-button"></div>
													</label>
												</td>
												<td>
													0.0
												</td>
											</tr>
											<tr>
												<td colspan="3">
													<span class="warning">
														<i class="fa fa-warning"></i> You can't exceed the maximum number of hours
													</span>

													<b class="subtotal">Subtotal</b>
												</td>
												<td>
													16.0
												</td>
											</tr>
										</table>

										<ul class="tb_btn">
											<li class="gray">
												<a href="">Reset</a>
											</li>
											<li class="orange">
												<a href="">Calculate</a>
											</li>
										</ul>
									</div>
								</dd>
							</dl>
						</div>
					</div>
						<div class="myresult clearfix fixed">
							<div class="hour">Weekly hours: 16/40</div>
							<div class="salary">
								<span>
									salary<b>$296.00</b>
								</span>
								
								<div class="currency">
									<div class="select1">
										<select name="" id="">
											<option value="">AUD</option>
											<option value="">EUR</option>
											<option value="">NTD</option>
											<option value="">USD</option>
											<option value="">RMB</option>
										</select>
									</div>
								</div>
							</div>
						</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php include_once('_footer.php'); ?>

</body>
</html>