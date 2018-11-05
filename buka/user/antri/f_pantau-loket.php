<script type="text/javascript">
	$("document").ready(function(){
		var tmp_loket=0;
		setInterval(function() {
			$.post("apps/monitoring-daemon.php", function( data ){
				if(tmp_loket!=data['jumlah_loket']){
					$(".col-md-3").remove();
					tmp_loket=0;
				}
				if (tmp_loket==0) {
					for (var i = 1; i<= data['jumlah_loket']; i++) {
						loket = '<div class="col-md-3">'+
									'<div class="'+ i +
									 ' jumbotron" style="padding-top:20px;padding-bottom:20px;">'+
										'<h1> '+data["init_counter"][i]+' </h1>'+
										'<button class="btn btn-danger" type="button"><span class="glyphicon glyphicon-credit-card">&nbsp;</span>LOKET '+ i +'</button>'+
									'</div>'+
								'</div>';
						$(".loket").append(loket);
					}

					tmp_loket = data['jumlah_loket'];
				}
				for (var i = 1; i <= data['jumlah_loket']; i++) { 					
					if (data["counter"]==i) {
						$("."+i+" h1").html(data["next"]);
					}
				}
				if (data["next"]) {
					var angka = data["next"];
					for (var i = 0 ; i < angka.toString().length; i++) {
						$(".audio").append('<audio id="suarabel'+i+'" src="audio/new/'+angka.toString().substr(i,1)+'.MP3" ></audio>');
					};
					mulai(data["next"],data["counter"]);
				}else{
					for (var i = 1; i <= data['jumlah_loket']; i++) { 					
						if (data["counter"]==i) {
							$("."+i+" h1").html(data["next"]);
						}
					}
				};

			}, "json"); 
		}, 1000);
		//change
	});
	
	function mulai(urut, loket){
		var totalwaktu = 8568.163;
		document.getElementById('in').pause();
		document.getElementById('in').currentTime=0;
		document.getElementById('in').play();
		totalwaktu=document.getElementById('in').duration*1000;	
		setTimeout(function() {
				document.getElementById('suarabelnomorurut').pause();
				document.getElementById('suarabelnomorurut').currentTime=0;
				document.getElementById('suarabelnomorurut').play();
		}, totalwaktu);
		totalwaktu=totalwaktu+1000;
		if(urut<10){
			setTimeout(function() {
					document.getElementById('suarabel0').pause();
					document.getElementById('suarabel0').currentTime=0;
					document.getElementById('suarabel0').play();
				}, totalwaktu);
			totalwaktu=totalwaktu+1000;
			setTimeout(function() {
					document.getElementById('loket').pause();
					document.getElementById('loket').currentTime=0;
					document.getElementById('loket').play();
				}, totalwaktu);
			totalwaktu=totalwaktu+1000;
			setTimeout(function() {
					document.getElementById('suarabelloket'+loket+'').pause();
					document.getElementById('suarabelloket'+loket+'').currentTime=0;
					document.getElementById('suarabelloket'+loket+'').play();
				}, totalwaktu);
			totalwaktu=totalwaktu+1000;
			setTimeout(function() {
					for (var i = 0 ; i < urut.toString().length; i++) {
						$("#suarabel"+i+"").remove();
					};
				}, totalwaktu);
			totalwaktu=totalwaktu+1000;
		}else if(urut==10){
				setTimeout(function() {
						document.getElementById('sepuluh').pause();
						document.getElementById('sepuluh').currentTime=0;
						document.getElementById('sepuluh').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('loket').pause();
						document.getElementById('loket').currentTime=0;
						document.getElementById('loket').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabelloket'+loket+'').pause();
						document.getElementById('suarabelloket'+loket+'').currentTime=0;
						document.getElementById('suarabelloket'+loket+'').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						for (var i = 0 ; i < urut.toString().length; i++) {
							$("#suarabel"+i+"").remove();
						};
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
		}else if(urut ==11){
				setTimeout(function() {
						document.getElementById('sebelas').pause();
						document.getElementById('sebelas').currentTime=0;
						document.getElementById('sebelas').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('loket').pause();
						document.getElementById('loket').currentTime=0;
						document.getElementById('loket').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabelloket'+loket+'').pause();
						document.getElementById('suarabelloket'+loket+'').currentTime=0;
						document.getElementById('suarabelloket'+loket+'').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						for (var i = 0 ; i < urut.toString().length; i++) {
							$("#suarabel"+i+"").remove();
						};
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
		}else if(urut < 20){
				setTimeout(function() {
						document.getElementById('suarabel1').pause();
						document.getElementById('suarabel1').currentTime=0;
						document.getElementById('suarabel1').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('belas').pause();
						document.getElementById('belas').currentTime=0;
						document.getElementById('belas').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('loket').pause();
						document.getElementById('loket').currentTime=0;
						document.getElementById('loket').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabelloket'+loket+'').pause();
						document.getElementById('suarabelloket'+loket+'').currentTime=0;
						document.getElementById('suarabelloket'+loket+'').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						for (var i = 0 ; i < urut.toString().length; i++) {
							$("#suarabel"+i+"").remove();
						};
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
		}else if(urut < 100){
				setTimeout(function() {
						document.getElementById('suarabel0').pause();
						document.getElementById('suarabel0').currentTime=0;
						document.getElementById('suarabel0').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('puluh').pause();
						document.getElementById('puluh').currentTime=0;
						document.getElementById('puluh').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabel1').pause();
						document.getElementById('suarabel1').currentTime=0;
						document.getElementById('suarabel1').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('loket').pause();
						document.getElementById('loket').currentTime=0;
						document.getElementById('loket').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabelloket'+loket+'').pause();
						document.getElementById('suarabelloket'+loket+'').currentTime=0;
						document.getElementById('suarabelloket'+loket+'').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						for (var i = 0 ; i < urut.toString().length; i++) {
							$("#suarabel"+i+"").remove();
						};
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
		}else if(urut==100){
			setTimeout(function() {
						document.getElementById('seratus').pause();
						document.getElementById('seratus').currentTime=0;
						document.getElementById('seratus').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('loket').pause();
						document.getElementById('loket').currentTime=0;
						document.getElementById('loket').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabelloket'+loket+'').pause();
						document.getElementById('suarabelloket'+loket+'').currentTime=0;
						document.getElementById('suarabelloket'+loket+'').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						for (var i = 0 ; i < urut.toString().length; i++) {
							$("#suarabel"+i+"").remove();
						};
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
		}else if (urut < 110) {
				setTimeout(function() {
						document.getElementById('seratus').pause();
						document.getElementById('seratus').currentTime=0;
						document.getElementById('seratus').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabel2').pause();
						document.getElementById('suarabel2').currentTime=0;
						document.getElementById('suarabel2').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('loket').pause();
						document.getElementById('loket').currentTime=0;
						document.getElementById('loket').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabelloket'+loket+'').pause();
						document.getElementById('suarabelloket'+loket+'').currentTime=0;
						document.getElementById('suarabelloket'+loket+'').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						for (var i = 0 ; i < urut.toString().length; i++) {
							$("#suarabel"+i+"").remove();
						};
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
		}else if (urut == 110) {
				setTimeout(function() {
						document.getElementById('seratus').pause();
						document.getElementById('seratus').currentTime=0;
						document.getElementById('seratus').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('sepuluh').pause();
						document.getElementById('sepuluh').currentTime=0;
						document.getElementById('sepuluh').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('loket').pause();
						document.getElementById('loket').currentTime=0;
						document.getElementById('loket').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabelloket'+loket+'').pause();
						document.getElementById('suarabelloket'+loket+'').currentTime=0;
						document.getElementById('suarabelloket'+loket+'').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						for (var i = 0 ; i < urut.toString().length; i++) {
							$("#suarabel"+i+"").remove();
						};
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
		}else if (urut == 111) {
				setTimeout(function() {
						document.getElementById('seratus').pause();
						document.getElementById('seratus').currentTime=0;
						document.getElementById('seratus').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('sebelas').pause();
						document.getElementById('sebelas').currentTime=0;
						document.getElementById('sebelas').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('loket').pause();
						document.getElementById('loket').currentTime=0;
						document.getElementById('loket').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabelloket'+loket+'').pause();
						document.getElementById('suarabelloket'+loket+'').currentTime=0;
						document.getElementById('suarabelloket'+loket+'').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						for (var i = 0 ; i < urut.toString().length; i++) {
							$("#suarabel"+i+"").remove();
						};
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
		}else if (urut < 120) {
				setTimeout(function() {
						document.getElementById('seratus').pause();
						document.getElementById('seratus').currentTime=0;
						document.getElementById('seratus').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabel2').pause();
						document.getElementById('suarabel2').currentTime=0;
						document.getElementById('suarabel2').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('belas').pause();
						document.getElementById('belas').currentTime=0;
						document.getElementById('belas').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('loket').pause();
						document.getElementById('loket').currentTime=0;
						document.getElementById('loket').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabelloket'+loket+'').pause();
						document.getElementById('suarabelloket'+loket+'').currentTime=0;
						document.getElementById('suarabelloket'+loket+'').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						for (var i = 0 ; i < urut.toString().length; i++) {
							$("#suarabel"+i+"").remove();
						};
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
		}else if (urut == 120) {
				setTimeout(function() {
						document.getElementById('seratus').pause();
						document.getElementById('seratus').currentTime=0;
						document.getElementById('seratus').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabel1').pause();
						document.getElementById('suarabel1').currentTime=0;
						document.getElementById('suarabel1').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('puluh').pause();
						document.getElementById('puluh').currentTime=0;
						document.getElementById('puluh').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('loket').pause();
						document.getElementById('loket').currentTime=0;
						document.getElementById('loket').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabelloket'+loket+'').pause();
						document.getElementById('suarabelloket'+loket+'').currentTime=0;
						document.getElementById('suarabelloket'+loket+'').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						for (var i = 0 ; i < urut.toString().length; i++) {
							$("#suarabel"+i+"").remove();
						};
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
		}else if (urut < 200) {
				setTimeout(function() {
						document.getElementById('seratus').pause();
						document.getElementById('seratus').currentTime=0;
						document.getElementById('seratus').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabel1').pause();
						document.getElementById('suarabel1').currentTime=0;
						document.getElementById('suarabel1').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('puluh').pause();
						document.getElementById('puluh').currentTime=0;
						document.getElementById('puluh').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				
				if (urut%10!=0) {
					setTimeout(function() {
							document.getElementById('suarabel2').pause();
							document.getElementById('suarabel2').currentTime=0;
							document.getElementById('suarabel2').play();
						}, totalwaktu);
					totalwaktu=totalwaktu+1000;
				}

				setTimeout(function() {
						document.getElementById('loket').pause();
						document.getElementById('loket').currentTime=0;
						document.getElementById('loket').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabelloket'+loket+'').pause();
						document.getElementById('suarabelloket'+loket+'').currentTime=0;
						document.getElementById('suarabelloket'+loket+'').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						for (var i = 0 ; i < urut.toString().length; i++) {
							$("#suarabel"+i+"").remove();
						};
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
		}else if (urut == 200) {
				setTimeout(function() {
						document.getElementById('suarabel0').pause();
						document.getElementById('suarabel0').currentTime=0;
						document.getElementById('suarabel0').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('ratus').pause();
						document.getElementById('ratus').currentTime=0;
						document.getElementById('ratus').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('loket').pause();
						document.getElementById('loket').currentTime=0;
						document.getElementById('loket').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabelloket'+loket+'').pause();
						document.getElementById('suarabelloket'+loket+'').currentTime=0;
						document.getElementById('suarabelloket'+loket+'').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						for (var i = 0 ; i < urut.toString().length; i++) {
							$("#suarabel"+i+"").remove();
						};
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
		}else if(urut < 999){
				setTimeout(function() {
						document.getElementById('suarabel0').pause();
						document.getElementById('suarabel0').currentTime=0;
						document.getElementById('suarabel0').play();
				}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				if (urut.toString().substr(1,1) == 0 && urut.toString().substr(2,1)==0) { // 200 300 400 ..
					setTimeout(function() {
							document.getElementById('ratus').pause();
							document.getElementById('ratus').currentTime=0;
							document.getElementById('ratus').play();
						}, totalwaktu);
					totalwaktu=totalwaktu+1000;
				} else if(urut.toString().substr(1,1) == 0 && urut.toString().substr(2,1)!=0){ // 201 304 405 506
					setTimeout(function() {
							document.getElementById('ratus').pause();
							document.getElementById('ratus').currentTime=0;
							document.getElementById('ratus').play();
						}, totalwaktu);
					totalwaktu=totalwaktu+1000;
					setTimeout(function() {
							document.getElementById('suarabel2').pause();
							document.getElementById('suarabel2').currentTime=0;
							document.getElementById('suarabel2').play();
						}, totalwaktu);
					totalwaktu=totalwaktu+1000;
				}else if(urut.toString().substr(1,1) != 0 && urut.toString().substr(2,1)==0){ //210 250 230
					if(urut.toString().substr(1,1) == 1){ //210
						setTimeout(function() {
							document.getElementById('ratus').pause();
							document.getElementById('ratus').currentTime=0;
							document.getElementById('ratus').play();
						}, totalwaktu);
						totalwaktu=totalwaktu+1000;
						setTimeout(function() {
							document.getElementById('sepuluh').pause();
							document.getElementById('sepuluh').currentTime=0;
							document.getElementById('sepuluh').play();
						}, totalwaktu);
						totalwaktu=totalwaktu+1000;
					}else{
						setTimeout(function() {
							document.getElementById('ratus').pause();
							document.getElementById('ratus').currentTime=0;
							document.getElementById('ratus').play();
						}, totalwaktu);
						totalwaktu=totalwaktu+1000;
						setTimeout(function() {
							document.getElementById('suarabel1').pause();
							document.getElementById('suarabel1').currentTime=0;
							document.getElementById('suarabel1').play();
						}, totalwaktu);
						totalwaktu=totalwaktu+1000;
						setTimeout(function() {
							document.getElementById('puluh').pause();
							document.getElementById('puluh').currentTime=0;
							document.getElementById('puluh').play();
						}, totalwaktu);
						totalwaktu=totalwaktu+1000;
					}
				}else if(urut.toString().substr(1,1) != 0 && urut.toString().substr(2,1)!=0){
					if (urut.toString().substr(1,1)==1) {
						if (urut.toString().substr(2,1)==1) { // 211 311 411 511
							setTimeout(function() {
									document.getElementById('ratus').pause();
									document.getElementById('ratus').currentTime=0;
									document.getElementById('ratus').play();
								}, totalwaktu);
							totalwaktu=totalwaktu+1000;
							setTimeout(function() {
									document.getElementById('sebelas').pause();
									document.getElementById('sebelas').currentTime=0;
									document.getElementById('sebelas').play();
								}, totalwaktu);
							totalwaktu=totalwaktu+1000;
						}else{ //212 215 219
							setTimeout(function() {
									document.getElementById('ratus').pause();
									document.getElementById('ratus').currentTime=0;
									document.getElementById('ratus').play();
								}, totalwaktu);
							totalwaktu=totalwaktu+1000;
							setTimeout(function() {
									document.getElementById('suarabel2').pause();
									document.getElementById('suarabel2').currentTime=0;
									document.getElementById('suarabel2').play();
								}, totalwaktu);
							totalwaktu=totalwaktu+1000;
							setTimeout(function() {
									document.getElementById('belas').pause();
									document.getElementById('belas').currentTime=0;
									document.getElementById('belas').play();
								}, totalwaktu);
							totalwaktu=totalwaktu+1000;
						}
					}else{
						setTimeout(function() {
								document.getElementById('ratus').pause();
								document.getElementById('ratus').currentTime=0;
								document.getElementById('ratus').play();
							}, totalwaktu);
						totalwaktu=totalwaktu+1000;
						setTimeout(function() {
								document.getElementById('suarabel1').pause();
								document.getElementById('suarabel1').currentTime=0;
								document.getElementById('suarabel1').play();
							}, totalwaktu);
						totalwaktu=totalwaktu+1000;
						setTimeout(function() {
								document.getElementById('puluh').pause();
								document.getElementById('puluh').currentTime=0;
								document.getElementById('puluh').play();
							}, totalwaktu);
						totalwaktu=totalwaktu+1000;
						if (urut%10!=0) {
							setTimeout(function() {
									document.getElementById('suarabel2').pause();
									document.getElementById('suarabel2').currentTime=0;
									document.getElementById('suarabel2').play();
								}, totalwaktu);
							totalwaktu=totalwaktu+1000;
						}
					}
				}

				setTimeout(function() {
						document.getElementById('loket').pause();
						document.getElementById('loket').currentTime=0;
						document.getElementById('loket').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						document.getElementById('suarabelloket'+loket+'').pause();
						document.getElementById('suarabelloket'+loket+'').currentTime=0;
						document.getElementById('suarabelloket'+loket+'').play();
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
				setTimeout(function() {
						for (var i = 0 ; i < urut.toString().length; i++) {
							$("#suarabel"+i+"").remove();
						};
					}, totalwaktu);
				totalwaktu=totalwaktu+1000;
		}

		setTimeout(function(){
			document.getElementById('out').pause();
			document.getElementById('out').currentTime=0;
			document.getElementById('out').play();
		}, totalwaktu);
		totalwaktu=totalwaktu+1000;
		setTimeout(function() {
			$.post("apps/monitoring-daemon-result.php", { id : urut }, function(data){
				if (!data.status) {
					console.log(data.status);		
				}
			}, 'json');
		}, totalwaktu);
		totalwaktu=totalwaktu+1000;
	}
	</script>