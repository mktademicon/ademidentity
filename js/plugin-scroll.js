
	/**
	* Autor: Tulio Bento
	* Criado: 14/05/2021 15:46
	*
	*/

	var animate_scroll_arry = [];

	animateScroll = (name, dif_name, qtd_dif_exibe) => {
		animate_scroll_arry[name] = {
      view: 0,
      exibe: 3,
      count: $('.' + name + '-itens .' + name + '-item').length,
      width_box: $('.' + name + '-itens').width(),
      name: name, 
	    margin: 20
    }

		if($('.' + name + '-itens').width() < 400){
			animate_scroll_arry[name]['exibe'] = 1
		}

		if((name == dif_name) && ($('.' + name + '-itens').width() >= 400)){
			animate_scroll_arry[name]['exibe'] = qtd_dif_exibe
		}
		
		var obj_ = animate_scroll_arry[name]
		animate_scroll_arry[name]['largura_box'] = ((obj_.width_box / obj_.exibe) - obj_.margin) * obj_.count
		animate_scroll_arry[name]['largura_item'] = (animate_scroll_arry[name]['largura_box'] + ( obj_.margin * obj_.count ))

		$('.' + name + '-box').css({
			width: animate_scroll_arry[name]['largura_item'] + 'px'
		})

		$('.' + name + '-box .' + name + '-item').css({
			width: (animate_scroll_arry[name]['largura_box'] / obj_.count ) + 'px'
		})
	}

	navigateScroll = (name,act) => {
		var obj_ = animate_scroll_arry[name]  
		
		switch(act)
		{
			case 'next':	
				obj_.view = obj_.view + 1

				if(obj_.view > (obj_.count - obj_.exibe)){
					obj_.view = obj_.count - obj_.exibe
					$('.' + name + '-nav-next').addClass('disabled')
					$('.' + name + '-nav-prev').removeClass('disabled')
				}else{
					$('.' + name + '-nav-next').removeClass('disabled')
					$('.' + name + '-nav-next').removeAttr('disabled')
					$('.' + name + '-nav-prev').removeClass('disabled')
				}
					
				next = obj_.view + obj_.exibe	 
				if(next == obj_.count){
					$('.' + name + '-nav-next').addClass('disabled')
					$('.' + name + '-nav-next').attr('disabled')
					$('.' + name + '-nav-prev').removeClass('disabled')
				}

				break;
			case 'prev':
				obj_.view = obj_.view - obj_.exibe
				
				if(obj_.view < 0){
					obj_.view = 0
					$('.' + name + '-nav-prev').addClass('disabled')
					$('.' + name + '-nav-next').removeClass('disabled')
				}else{
					$('.' + name + '-nav-next').removeClass('disabled')
					$('.' + name + '-nav-next').removeAttr('disabled')
					$('.' + name + '-nav-prev').removeClass('disabled')
				}
					
				prev = obj_.view 
				if(prev == 0){
					$('.' + name + '-nav-prev').addClass('disabled')
					$('.' + name + '-nav-prev').attr('disabled')
					$('.' + name + '-nav-next').removeClass('disabled')
				}
				
				break;
		}
		  
		animate_scroll_arry[name].view = obj_.view
		  
		$('.' + name + '-box').css({
			right: (obj_.largura_item / obj_.count) * obj_.view
		})	
	}