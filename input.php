<div class="page-header">
							<h1>
								Form Elements
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									සේවක තොරතුරු
								</small>
							</h1>
						</div><!-- /.page-header -->
						
						
						
						
						
						
						<div class="row" style="background-color:  #56d9e9 ;">
							<div class="col-xs-12">
							<br>
							<form action="upload.php" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> සම්පූර්ණ නම </label>

										<div class="col-sm-9">
											<textarea class="form-control" name="fname" id="form-field-8" placeholder="Default Text"  required></textarea>
										</div>
										
										
									</div>
									
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> මුලකුරු සමඟ නම </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1-1" name="name" placeholder="Text Field" class="form-control" required/>
										</div>
									</div>
									<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> පින්තුරය තෝරන්න<p class="help-block">Only jpg,jpeg,png and gif file with maximum size of 1 MB is allowed.</p> </label>
									
									
									<input type="file" name="file">
									
									</div>
									
									
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> FUll NAME </label>

										<div class="col-sm-9">
											<textarea class="form-control" name="fnameE" id="form-field-8" placeholder="Default Text" required></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name  </label>

										<div class="col-sm-9">
											<input type="text" name="nameE"id="form-field-1-1" placeholder="Text Field" class="form-control" required />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ජා.හැ.අංකය </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="ID" placeholder="Text Field" class="col-xs-10 col-sm-5" required />
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> පුද්ගලික ලිපිනය </label>

										<div class="col-sm-9">
											<textarea class="form-control" name="Address" id="form-field-8" placeholder="Default Text" required></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> පුද්ගලික දුරකතන අංකය</label>

										<div class="col-sm-3">
												<input class="form-control" id="inputPhone"  maxlength="10" name="phone" required="required" size="3" title="" type="tel" value="" width=25%>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> පුද්ගලික විද්‍යුත් ලිපිනය</label>

										<div class="col-sm-9">
												<input type="email" name="email" class="form-control" id="email">
										</div>
									</div>
									 <div class="form-group ">
										<label class="control-label col-sm-3 requiredField" for="date">
										උපන් දිනය<span class="asteriskField"> *</span></label>
										<div class="col-sm-3">
										<div class="input-group">
										<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
										</div>
										<input class="form-control" id="date" name="birth" placeholder="MM/DD/YYYY" type="text" required="required"/>
										</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">උප්පැන්න සහතික අංකය</label>

										<div class="col-sm-3">
												<input type="text" name="bno" class="form-control" id="email">
										</div>
									</div>
									
									
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ස්ත්‍රී/පුරිෂ භාවය</label>

										<div class="col-sm-9">
											<class="control-group">
												

												<div class="radio">
													<label>
														<input name="form-field-radio" type="radio" value="ස්ත්‍රී" class="ace " required="required"/>
														<span class="lbl">ස්ත්‍ර</span>
													</label>
											

											
													<label>
														<input name="form-field-radio" type="radio" value="පුරුෂ" class="ace" required="required" />
														<span class="lbl"> පුරිෂ</span>
													</label>
												</div>

												

												

											</div>
										</div>
									
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" co for="form-field-1"> ජන වර්ගය</label>

										<div class="col-sm-3">
												<select class="form-control" name="nation" required>
												<option value=""></option>
												<option value="සිංහල">සිංහල</option>
												<option value="‍රී ලංකා දෙමළ">ශ්‍රී ලංකා දෙමළ</option>
												<option value="ඉන්දියානු දෙමළ">ඉන්දියානු දෙමළ</option>
												<option value="‍ශ්‍රී ලංකා මුස්ලිම්">ශ්‍රී ලංකා මුස්ලිම්</option>
												<option value="වෙනත්">වෙනත්</option>
												
												</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ආගම</label>

										<div class="col-sm-3">
												<select class="form-control" name="reli">
												<option value=""></option>
												<option value="බෞද්ධ">බෞද්ධ</option>
												<option value="හිනුද">හින්දු</option>
												<option value="ඉස්ලාම්">ඉස්ලාම්</option>
												<option value="කතෝලික">කතෝලික</option>
												<option value="ක්‍රිස්තියානි">ක්‍රිස්තියානි</option>
												<option value="වෙනත්">වෙනත්</option>
												</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> විවාහක/අවිවාහක භාවය</label>

										<div class="col-sm-9">
											<class="control-group">
												

												<div class="radio">
													<label>
														<input name="form-field-radio1" type="radio" class="ace " value="විවාහක" />
														<span class="lbl"> විවාහක</span>
													</label>
											

											
													<label>
														<input name="form-field-radio1" type="radio" class="ace" value="අවිවාහාක" />
														<span class="lbl"> අවිවාහාක</span>
													</label>
													
													<label>
														<input name="form-field-radio1" type="radio" class="ace" value="වැන්දඹු" />
														<span class="lbl"> වැන්දඹු</span>
													</label>
													<label>
														<input name="form-field-radio1" type="radio" class="ace" value="වෙනත්" />
														<span class="lbl"> වෙනත්</span>
													</label>
												</div>

												

												

											</div>
										</div>
									<div class="form-group ">
										<label class="control-label col-sm-3 requiredField" for="date">
										විවාහ වූ දිනය<span class="asteriskField"> *</span></label>
										<div class="col-sm-3">
										<div class="input-group">
										<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
										</div>
										<input class="form-control" id="date" name="birth" placeholder="MM/DD/YYYY" type="text" required="required"/>
										</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">විවාහ සහතිකයේ අංකය</label>

										<div class="col-sm-3">
												<input type="text" name="mno" class="form-control" id="email">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">වැන්දඹු අනත්දරු පුරුෂ ලියාපදිංචි අංකය - W&OP</label>

										<div class="col-sm-3">
												<input type="text" name="wop" class="form-control" id="email">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ඉහලම අධ්‍යාපන සුදුසුකම</label>

										<div class="col-sm-3">
												<select class="form-control" name="hiqual">
												<option></option>
												<option value="අධ්‍යාපන පරිපාලන සේවය ">අ.පො.ස. (සා.පෙළ)ට අඩු</option>
												<option value="අ.පො.ස. (සා.පෙළ)ල හෝ සමාන ">අ.පො.ස. (සා.පෙළ)ල හෝ සමාන</option>
												<option value="අ.පො.ස. (උ.පෙළ)ල හෝ සමාන ">අ.පො.ස. (උ.පෙළ)ල හෝ සමාන</option>
												<option value="උපාධි හා ඊට සමාන ">උපාධි හා ඊට සමාන </option>
												<option value="ශාස්ත්‍රපති හා ඊට සමාන ">ශාස්ත්‍රපති හා ඊට සමාන</option>
												<option value="දර්ශනපති හා ඊට සමාන්තර ">දර්ශනපති හා ඊට සමාන්තර</option>
												<option value="දර්ශනශූරී උපාධි හා ඊට සමාන්තර ">දර්ශනශූරී උපාධි හා ඊට සමාන්තර</option>
												</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ඉහලම වෘත්තීය සුදුසුකම</label>

										<div class="col-sm-3">
												<select class="form-control" name="hiprof">
												<option></option>
												<option value="දර්ශනශූරී අධ්‍යාපනය පිළිබඳ">දර්ශනශූරී අධ්‍යාපනය පිළිබඳ</option>
												<option value="දර්ශනපති අධ්‍යාපනය පිළිබඳ">දර්ශනපති අධ්‍යාපනය පිළිබඳ</option>
												<option value="අධ්‍යාපනපති උපාධි">අධ්‍යාපනපති උපාධි</option>
												<option value="අධ්‍යාපනය පිළිබඳව ශාස්ත්‍රපති උපාධිය">අධ්‍යාපනය පිළිබඳව ශාස්ත්‍රපති උපාධිය</option>
												<option value="පශ්චාත් උපාධි අධ්‍යාපන ඩිප්ලෝමා">පශ්චාත් උපාධි අධ්‍යාපන ඩිප්ලෝමා</option>
												<option value="ගුරු අධ්‍යාපනය පිළිබඳ ශාස්ත්‍රපති උපාධිය">ගුරු අධ්‍යාපනය පිළිබඳ ශාස්ත්‍රපති උපාධිය</option>
												<option value="අධ්‍යාපන කළමනාකරණය පිළිබඳ විද්‍යාපති">අධ්‍යාපන කළමනාකරණය පිළිබඳ විද්‍යාපති</option>
												<option value="අධ්‍යාපන කළමනාකරණය පිළිබඳ පශ්චාත් උපාධි ඩිප්ලෝමා">අධ්‍යාපන කළමනාකරණය පිළිබඳ පශ්චාත් උපාධි ඩිප්ලෝමා</option>
												<option value="දෙවන භාෂාවක් ලෙස ඉංග්‍රිසි ඉගැන්විමේ පශ්චාත් උපාධි ඩිප්ලෝමා">දෙවන භාෂාවක් ලෙස ඉංග්‍රිසි ඉගැන්විමේ පශ්චාත් උපාධි ඩිප්ලෝමා</option>
												<option value="NIE හෝ විවෘත විශ්ව විද්‍යාල අධ්‍යාපන වේදී උපාධිය">NIE හෝ විවෘත විශ්ව විද්‍යාල අධ්‍යාපන වේදී උපාධිය</option>
												<option value="දෙවන භාෂාවක් ලෙස ඉංග්‍රිසි ඉගැන්විමේ  ඩිප්ලෝමා">දෙවන භාෂාවක් ලෙස ඉංග්‍රිසි ඉගැන්විමේ  ඩිප්ලෝමා</option>
												<option value="ගුරු පුස්තකාලාධිපති ඩිප්ලෝමා පාඨමාලාව">ගුරු පුස්තකාලාධිපති ඩිප්ලෝමා පාඨමාලාව </option>
												<option value="ගුරු පුස්තකාලාධිපති සහතික පත්‍ර පාඨමාලාව">ගුරු පුස්තකාලාධිපති සහතික පත්‍ර පාඨමාලාව</option>
												<option value="ගුරු පුස්තකාල විද්‍යා පශ්චාත් උපාධි ඩිප්ලෝමා පාඨමාලාව">ගුරු පුස්තකාල විද්‍යා පශ්චාත් උපාධි ඩිප්ලෝමා පාඨමාලාව</option>
												<option value="ගුරු පුස්තකාලාධිපති විද්‍යාපති උපාධි">ගුරු පුස්තකාලාධිපති විද්‍යාපති උපාධි</option>
												<option value="කෘෂී අධ්‍යාපනය පිළිබඳ ඩිප්ලෝමා">කෘෂී අධ්‍යාපනය පිළිබඳ ඩිප්ලෝමා</option>
												<option value="ගුරු පුහුණු සහතිකය ආයතනික">ගුරු පුහුණු සහතිකය ආයතනික</option>
												<option value="ගුරු පුහුණු සහතිකය දුරස්ත">ගුරු පුහුණු සහතිකය දුරස්ත</option>
												<option value="ජාතික ශික්ෂණ විද්‍යා ඩිප්ලෝමා">ජාතික ශික්ෂණ විද්‍යා ඩිප්ලෝමා</option>
												<option value="තාක්ෂණ ඩිප්ලෝමා">තාක්ෂණ ඩිප්ලෝමා</option>
												<option value="උසස් තාක්ෂණ ඩිප්ලෝමා">උසස් තාක්ෂණ ඩිප්ලෝමා</option>
												<option value="වෘත්තීය සුදුසුකම ලබා නොමැත">වෘත්තීය සුදුසුකම ලබා නොමැත</option>
												
												</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">සේවක ගණය</label>

										<div class="col-sm-3">
												<select class="form-control" Name="service">
												<option></option>
												<?php
											include('../connect.php');
	
												$result = $db->prepare("SELECT * FROM service");
												$result->bindParam(':userid', $res);
												$result->execute();
												for($i=0; $row = $result->fetch(); $i++){
												?>
												
												
												<option value="<?php echo $row['Service_Name'];?>"><?php echo $row['Service_Name'];?></option>
												<?php
												}
												?>
												</select>
										</div>
									</div>
									
									
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> මුල් පත්වීමේ ස්වාභාවය</label>

										<div class="col-sm-3">
												<select class="form-control" Name="firstapp">
												<option></option>
												<option>අධ්‍යාපන පරිපාලන සේවය</option>
												<option>ගුරු අධ්‍යාපන‍ඥ සේවය</option>
												<option>ගුරු සේවය</option>
												<option>වෙනත්</option>
												</select>
										</div>
									</div>
									 <div class="form-group ">
										<label class="control-label col-sm-3 requiredField" for="date">
										මුල් පත් වූ දිනය<span class="asteriskField"> *</span></label>
										<div class="col-sm-3">
										<div class="input-group">
										<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
										</div>
										<input class="form-control" id="date" name="datefirst" placeholder="MM/DD/YYYY" type="text"/>
										</div>
										</div>
									</div>
									<div class="form-group ">
										<label class="control-label col-sm-3 requiredField" for="date">
										මුල් පත්වීමට අනුව වැඩ භාරගත් දිනය<span class="asteriskField"> *</span></label>
										<div class="col-sm-3">
										<div class="input-group">
										<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
										</div>
										<input class="form-control" id="date" name="datefirst" placeholder="MM/DD/YYYY" type="text"/>
										</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> මුල් පත්වීම් ලිපියේ අංකය</label>

										<div class="col-sm-3">
												<input type="text" name="appNo" class="form-control" id="email">
										</div>
									</div>
									<div class="form-group ">
										<label class="control-label col-sm-3 requiredField" for="date">
										මුල් පත්වීම් ලිපියේ  දිනය<span class="asteriskField"> *</span></label>
										<div class="col-sm-3">
										<div class="input-group">
										<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
										</div>
										<input class="form-control" id="date" name="dateLetter" placeholder="MM/DD/YYYY" type="text"/>
										</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> අයත්වන වර්තමාන සේවය</label>

										<div class="col-sm-3">
												<select class="form-control" name="preserv">
												<option></option>
												<option>ශ්‍රී ලංකා අධ්‍යාපන පරිපාලන සේවය I (SLEAS) අධි ශ්‍රේණිය</option>
												<option>ශ්‍රී ලංකා අධ්‍යාපන පරිපාලන සේවය I (SLEAS I) </option>
												<option>ශ්‍රී ලංකා අධ්‍යාපන පරිපාලන සේවය II (SLEAS II) </option>
												<option>ශ්‍රී ලංකා අධ්‍යාපන පරිපාලන සේවය III (SLEAS III)</option>
												<option>ශ්‍රී ලංකා විදුහල්පති සේවය 1 (SLPS 1)</option>
												<option>ශ්‍රී ලංකා විදුහල්පති සේවය 2 (SLPS 2)</option>
												<option>ශ්‍රී ලංකා විදුහල්පති සේවය 3 (SLPS 3)</option>
												<option>ගුරු අධ්‍යාපන‍ඥ සේවය I (SLTE I)</option>
												<option>ගුරු අධ්‍යාපන‍ඥ සේවය II (SLTE II)</option>
												<option>ගුරු අධ්‍යාපන‍ඥ සේවය III (SLTE III)</option>
												<option>ශ්‍රී ලංකා ගුරු සේවය 1</option>
												<option>ශ්‍රී ලංකා ගුරු සේවය 1-2</option>
												<option>ශ්‍රී ලංකා ගුරු සේවය 2-11</option>
												<option>ශ්‍රී ලංකා ගුරු සේවය 3-1 (අ)</option>
												<option>ශ්‍රී ලංකා ගුරු සේවය 3-1(ආ)</option>
												<option>ශ්‍රී ලංකා ගුරු සේවය 3-1(ඇ)</option>
												<option>ශ්‍රී ලංකා ගුරු සේවය 3-11</option>
												<option>ශ්‍රී උපදේශක</option>
												</select>
										</div>
									</div>
									<div class="form-group ">
										<label class="control-label col-sm-3 requiredField" for="date">
										වර්තමාන සේවයට පත් වූ දිනය<span class="asteriskField"> *</span></label>
										<div class="col-sm-3">
										<div class="input-group">
										<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
										</div>
										<input class="form-control" id="date" name="datenow" placeholder="MM/DD/YYYY" type="text"/>
										</div>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> පත්වීම් ලිපියට අනුව සේවක ගණය</label>

										<div class="col-sm-3">
												<select class="form-control" name="nowgrade">
												<option></option>
												<option>සාමාන්‍ය</option>
												<option>විශේෂ</option>
												<option>අධි සේවක</option>
												<option>වෙනත්</option>
												
												</select>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> විශේෂ නම් අදාල විෂය</label>

										<div class="col-sm-3">
												<select class="form-control" name="subject">
												<option></option>
												<option>Shinhala</option>
												<option>Tamil</option>
												<option>English and Other Languages </option>
												<option>Mathematics</option>
												<option>Science</option>
												<option>Commerce</option>
												<option>Informetion Technology</option>
												<option>Physical Education</option>
												<option>Buddhism</option>
												<option>Christianity</option>
												<option>Hindu</option>
												<option>Islam</option>
												<option>Student Counseling and guidance</option>
												<option>Aesthetics</option>
												<option>Technology </option>
												<option>Special Education</option>
												<option>Planning</option>
												<option>Primary Education</option>
												<option>History</option>
												<option>Other</option>
												
												</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> බදවා ගැනීමෙ ස්වභාවය</label>

										<div class="col-sm-3">
												<select class="form-control" name="appstat">
												<option></option>
												<option>විවෘත</option>
												<option>සීමිත</option>
												<option>කුසලතා මත</option>
												</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">දැනට දරණ තනතුර</label>

										<div class="col-sm-3">
												<select class="form-control" name="newgrade">
												<option></option>
												<option >අතිරේක ලේකම්</option>
												<option >විභාග කොමසාරිස් ජනරාල්</option>
												<option >අතිරේක කොමසාරිස්</option>
												<option >නියෝජ්‍ය කොමසාරිස්</option>
												<option >සහකාර කොමසාරිස්</option>
												<option >අධ්‍යක්ෂ ජෙනරාල්</option>
												<option >පළාත් අධ්‍යාපන අධ්‍යක්ෂ</option>
												<option >අධ්‍යාපන අධ්‍යක්ෂ</option>
												<option >අතිරේක පළාත් අධ්‍යාපන අධ්‍යක්ෂ</option>
												<option >පිඨාධිපති</option>
												<option >උප පිඨාධිපති</option>
												<option >කලාප අධ්‍යාපන අධ්‍යක්ෂ</option>
												<option >නියෝජ්‍ය අධ්‍යාපන අධ්‍යක්ෂ</option>
												<option >කොට්ඨාස අධ්‍යාපන අධ්‍යක්ෂ</option>
												<option >සහකාර අධ්‍යාපන අධ්‍යක්ෂ</option>
												<option >විදුහල්පති</option>
												<option >නියෝජ්‍ය විදුහල්පති</option>
												<option >සහකාර විදුහල්පති</option>
												<option >ගුරු මධ්‍යස්තාන කළමනාකරු</option>
												<option >ගුරු මධ්‍යස්තාන කථිකාචාර්ය</option>
												<option >පරිගණක මධ්‍යස්තාන උපදේශක</option>
												<option >ඉංග්‍රිසි උපදේශක</option>
												<option >සම්පත් මධ්‍යස්තාන කළමනාකරු</option>
												<option >ගුරු උපදේශක</option>
												<option >වෙනත්</option>
												
												
												</select>
										</div>
									</div>
									
									<div class="form-group ">
										<label class="control-label col-sm-3 requiredField" for="date">
										එම තනතුරට පත් වූ දිනය<span class="asteriskField"> *</span></label>
										<div class="col-sm-3">
										<div class="input-group">
										<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
										</div>
										<input class="form-control" id="date" name="datenow1" placeholder="MM/DD/YYYY" type="text"/>
										</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> වර්තමාන සේවා ස්ථානය</label>

										<div class="col-sm-3">
												<input type="text" name="appNo" class="form-control" id="email">
										</div>
									</div>
								<div class="form-group ">
										<label class="control-label col-sm-3 requiredField" for="date">
										වර්තමාන සේවා ස්ථානයේ වැඩ භාර ගත් දිනය<span class="asteriskField"> *</span></label>
										<div class="col-sm-3">
										<div class="input-group">
										<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
										</div>
										<input class="form-control" id="date" name="myplace" placeholder="MM/DD/YYYY" type="text"/>
										</div>
										</div>
									</div>
									<div class="form-group ">
										<label class="control-label col-sm-3 requiredField" for="date">
										පළමු කාර්යක්ෂමතා කඩඉම් පරික්ෂණය සමත් විය යුතු දිනය<span class="asteriskField"> *</span></label>
										<div class="col-sm-3">
										<div class="input-group">
										<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
										</div>
										<input class="form-control" id="date" name="date1exam" placeholder="MM/DD/YYYY" type="text"/>
										</div>
										</div>
									</div>
									<div class="form-group ">
										<label class="control-label col-sm-3 requiredField" for="date">
										පළමු කාර්යක්ෂමතා කඩඉම් පරික්ෂණය සමත් වූ දිනය<span class="asteriskField"> *</span></label>
										<div class="col-sm-3">
										<div class="input-group">
										<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
										</div>
										<input class="form-control" id="date" name="date1exammust" placeholder="MM/DD/YYYY" type="text"/>
										</div>
										</div>
									</div>
									<div class="form-group ">
										<label class="control-label col-sm-3 requiredField" for="date">
										දෙවන කාර්යක්ෂමතා කඩඉම් පරික්ෂණය  සමත් විය යුතු දිනය<span class="asteriskField"> *</span></label>
										<div class="col-sm-3">
										<div class="input-group">
										<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
										</div>
										<input class="form-control" id="date" name="date2exam" placeholder="MM/DD/YYYY" type="text"/>
										</div>
										</div>
									</div>
									<div class="form-group ">
										<label class="control-label col-sm-3 requiredField" for="date">
										දෙවන කාර්යක්ෂමතා කඩඉම් පරික්ෂණය සමත් වූ දිනය<span class="asteriskField"> *</span></label>
										<div class="col-sm-3">
										<div class="input-group">
										<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
										</div>
										<input class="form-control" id="date" name="date2exammust" placeholder="MM/DD/YYYY" type="text"/>
										</div>
										</div>
									</div>
									<div class="form-group ">
										<label class="control-label col-sm-3 requiredField" for="date">
										තෙවන කාර්යක්ෂමතා කඩඉම් පරික්ෂණය  සමත් විය යුතු දිනය<span class="asteriskField"> *</span></label>
										<div class="col-sm-3">
										<div class="input-group">
										<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
										</div>
										<input class="form-control" id="date" name="date3exam" placeholder="MM/DD/YYYY" type="text"/>
										</div>
										</div>
									</div>
									<div class="form-group ">
										<label class="control-label col-sm-3 requiredField" for="date">
										තෙවන කාර්යක්ෂමතා කඩඉම් පරික්ෂණය සමත් වූ දිනය<span class="asteriskField"> *</span></label>
										<div class="col-sm-3">
										<div class="input-group">
										<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
										</div>
										<input class="form-control" id="date" name="date3exammust" placeholder="MM/DD/YYYY" type="text"/>
										</div>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> දැනට ඔබගේ ශ්‍රේණිය</label>

										<div class="col-sm-3">
												<select class="form-control" name="appstat">
												<option></option>
												<option>විශේෂ</option>
												<option>I</option>
												<option>II</option>
												<option>III</option>
												</select>
										</div>
									</div>
									<div class="form-group ">
										<label class="control-label col-sm-3 requiredField" for="date">
										එම ශේණියට පත් වූ දිනය<span class="asteriskField"> *</span></label>
										<div class="col-sm-3">
										<div class="input-group">
										<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
										</div>
										<input class="form-control" id="date" name="2222" placeholder="MM/DD/YYYY" type="text"/>
										</div>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> එම ශ්‍රේණියට පත් කළ ලිපියේ අංකය</label>

										<div class="col-sm-3">
												<input type="text" name="tissrvicelet" class="form-control" id="email">
										</div>
									</div>
									<div class="form-group ">
										<label class="control-label col-sm-3 requiredField" for="date">
										එම ශේණියට පත් වූ ලිපියේ  දිනය<span class="asteriskField"> *</span></label>
										<div class="col-sm-3">
										<div class="input-group">
										<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
										</div>
										<input class="form-control" id="date" name="tissrviceletdate" placeholder="MM/DD/YYYY" type="text"/>
										</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> සම්පුර්ණ කිරීමට අවශ්‍ය පුහුණුවීම් /පඨමාලා විස්තර </label>

										<div class="col-sm-9">
											<textarea class="form-control" name="traning" id="form-field-8" placeholder="Default Text" required></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> දැනට හදාරමින් පවතින වෙනත් පාඨමාලා විස්තර හා එම පාඨමාලා සම්පුර්ණ වන කාල සිමාව </label>

										<div class="col-sm-9">
											<textarea class="form-control" name="cos" id="form-field-8" placeholder="Default Text" required></textarea>
										</div>
									</div>
									
									
									
									
									<div class="form-group ">
										<label class="control-label col-sm-3 requiredField" for="date">
										</span></label>
										<div class="col-sm-3">
										<div class="input-group">
										
											<input type="submit" class="btn btn-info" value="Submit Button">
											<button type="reset" class="btn btn-info" value="Reset">Reset</button>
										</div>
										</div>
									</div>
								
									
							</form>
							</div>
						</div>