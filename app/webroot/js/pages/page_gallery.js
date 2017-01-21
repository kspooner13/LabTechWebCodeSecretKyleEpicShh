$(function(){
	'use strict';

	$("#elastic_grid_demo").elastic_grid({
		'showAllText' : 'All',
		'filterEffect': 'popup', // moveup, scaleup, fallperspective, fly, flip, helix , popup
		'hoverDirection': true,
		'hoverDelay': 0,
		'hoverInverse': false,
		'expandingSpeed': 500,
		'expandingHeight': 500,
		'items' :
		[
			{
				'title'         : 'Azuki bean',
				'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
				'thumbnail'     : ['assets/images/gallery/small/1.jpg', 'assets/images/gallery/small/2.jpg', 'assets/images/gallery/small/3.jpg', 'assets/images/gallery/small/10.jpg', 'assets/images/gallery/small/11.jpg'],
				'large'         : ['assets/images/gallery/large/1.jpg', 'assets/images/gallery/large/2.jpg', 'assets/images/gallery/large/3.jpg', 'assets/images/gallery/large/10.jpg', 'assets/images/gallery/large/11.jpg'],
				'button_list'   :
				[
					{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/', 'new_window' : true },
					{ 'title':'Download', 'url':'http://porfolio.bonchen.net/', 'new_window' : false}
				],
				'tags'          : ['Self Portrait']
			},
			{
				'title'         : 'Swiss chard pumpkin',
				'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
				'thumbnail'     : ['assets/images/gallery/small/4.jpg', 'assets/images/gallery/small/5.jpg', 'assets/images/gallery/small/6.jpg', 'assets/images/gallery/small/7.jpg'],
				'large'         : ['assets/images/gallery/large/4.jpg', 'assets/images/gallery/large/5.jpg', 'assets/images/gallery/large/6.jpg', 'assets/images/gallery/large/7.jpg'],
				'button_list'   :
				[
					{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/', 'new_window' : true },
					{ 'title':'Download', 'url':'http://porfolio.bonchen.net/', 'new_window' : true}
				],
				'tags'          : ['Landscape']
			},
			{
				'title'         : 'Spinach winter purslane',
				'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
				'thumbnail'     : ['assets/images/gallery/small/15.jpg','assets/images/gallery/small/8.jpg', 'assets/images/gallery/small/9.jpg', 'assets/images/gallery/small/10.jpg'],
				'large'         : ['assets/images/gallery/large/15.jpg','assets/images/gallery/large/8.jpg', 'assets/images/gallery/large/9.jpg', 'assets/images/gallery/large/10.jpg'],
				'button_list'   :
				[
					{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/', 'new_window' : true },
					{ 'title':'Download', 'url':'http://porfolio.bonchen.net/', 'new_window' : true}
				],
				'tags'          : ['Self Portrait', 'Landscape']
			},
			{
				'title'         : 'Aubergine napa cabbage',
				'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
				'thumbnail'     : ['assets/images/gallery/small/12.jpg', 'assets/images/gallery/small/13.jpg', 'assets/images/gallery/small/14.jpg', 'assets/images/gallery/small/15.jpg', 'assets/images/gallery/small/16.jpg'],
				'large'         : ['assets/images/gallery/large/12.jpg', 'assets/images/gallery/large/13.jpg', 'assets/images/gallery/large/14.jpg', 'assets/images/gallery/large/15.jpg', 'assets/images/gallery/large/16.jpg'],
				'button_list'   :
				[
					{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/', 'new_window' : true },
					{ 'title':'Download', 'url':'http://porfolio.bonchen.net/', 'new_window' : true}
				],
				'tags'          : ['Portrait']
			},
			{
				'title'         : 'Swiss chard pumpkin',
				'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
				'thumbnail'     : ['assets/images/gallery/small/17.jpg', 'assets/images/gallery/small/18.jpg', 'assets/images/gallery/small/19.jpg', 'assets/images/gallery/small/20.jpg'],
				'large'         : ['assets/images/gallery/large/17.jpg', 'assets/images/gallery/large/18.jpg', 'assets/images/gallery/large/19.jpg', 'assets/images/gallery/large/20.jpg'],
				'button_list'   :
				[
					{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/', 'new_window' : true },
					{ 'title':'Download', 'url':'http://porfolio.bonchen.net/', 'new_window' : true}
				],
				'tags'          : ['Landscape']
			},
			{
				'title'         : 'Spinach winter purslane',
				'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
				'thumbnail'     : ['assets/images/gallery/small/13.jpg','assets/images/gallery/small/15.jpg', 'assets/images/gallery/small/11.jpg', 'assets/images/gallery/small/10.jpg'],
				'large'         : ['assets/images/gallery/large/13.jpg','assets/images/gallery/large/15.jpg', 'assets/images/gallery/large/11.jpg', 'assets/images/gallery/large/10.jpg'],
				'button_list'   :
				[
					{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/', 'new_window' : true },
					{ 'title':'Download', 'url':'http://porfolio.bonchen.net/', 'new_window' : true}
				],
				'tags'          : ['Vintage']
			},
			{
				'title'         : 'Spinach winter purslane',
				'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
				'thumbnail'     : ['assets/images/gallery/small/7.jpg','assets/images/gallery/small/8.jpg', 'assets/images/gallery/small/9.jpg', 'assets/images/gallery/small/10.jpg'],
				'large'         : ['assets/images/gallery/large/7.jpg','assets/images/gallery/large/8.jpg', 'assets/images/gallery/large/9.jpg', 'assets/images/gallery/large/10.jpg'],
				'button_list'   :
				[
					{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/', 'new_window' : true },
					{ 'title':'Download', 'url':'http://porfolio.bonchen.net/', 'new_window' : true}
				],
				'tags'          : ['Portrait']
			},
			{
				'title'         : 'Azuki bean',
				'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
				'thumbnail'     : ['assets/images/gallery/small/16.jpg', 'assets/images/gallery/small/13.jpg', 'assets/images/gallery/small/14.jpg', 'assets/images/gallery/small/15.jpg', 'assets/images/gallery/small/16.jpg'],
				'large'         : ['assets/images/gallery/large/16.jpg', 'assets/images/gallery/large/13.jpg', 'assets/images/gallery/large/14.jpg', 'assets/images/gallery/large/15.jpg', 'assets/images/gallery/large/16.jpg'],
				'button_list'   :
				[
					{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/', 'new_window' : true },
					{ 'title':'Download', 'url':'http://porfolio.bonchen.net/', 'new_window' : true}
				],
				'tags'          : ['Vintage']
			},
			{
				'title'         : 'Swiss chard pumpkin',
				'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
				'thumbnail'     : ['assets/images/gallery/small/18.jpg', 'assets/images/gallery/small/18.jpg', 'assets/images/gallery/small/19.jpg', 'assets/images/gallery/small/20.jpg'],
				'large'         : ['assets/images/gallery/large/18.jpg', 'assets/images/gallery/large/18.jpg', 'assets/images/gallery/large/19.jpg', 'assets/images/gallery/large/20.jpg'],
				'button_list'   :
				[
					{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/', 'new_window' : true },
					{ 'title':'Download', 'url':'http://porfolio.bonchen.net/', 'new_window' : true}
				],
				'tags'          : ['Landscape']
			},
			{
				'title'         : 'Winter purslane',
				'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
				'thumbnail'     : ['assets/images/gallery/small/11.jpg','assets/images/gallery/small/15.jpg', 'assets/images/gallery/small/11.jpg', 'assets/images/gallery/small/10.jpg'],
				'large'         : ['assets/images/gallery/large/11.jpg','assets/images/gallery/large/15.jpg', 'assets/images/gallery/large/11.jpg', 'assets/images/gallery/large/10.jpg'],
				'button_list'   :
				[
					{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/', 'new_window' : true },
					{ 'title':'Download', 'url':'http://porfolio.bonchen.net/', 'new_window' : true}
				],
				'tags'          : ['Portrait']
			},
			{
				'title'         : 'Spinach winter purslane',
				'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
				'thumbnail'     : ['assets/images/gallery/small/3.jpg','assets/images/gallery/small/15.jpg', 'assets/images/gallery/small/11.jpg', 'assets/images/gallery/small/10.jpg'],
				'large'         : ['assets/images/gallery/large/3.jpg','assets/images/gallery/large/15.jpg', 'assets/images/gallery/large/11.jpg', 'assets/images/gallery/large/10.jpg'],
				'button_list'   :
				[
					{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/', 'new_window' : true },
					{ 'title':'Download', 'url':'http://porfolio.bonchen.net/', 'new_window' : true}
				],
				'tags'          : ['Vintage']
			},
			{
				'title'         : 'Spinach winter purslane',
				'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
				'thumbnail'     : ['assets/images/gallery/small/5.jpg','assets/images/gallery/small/8.jpg', 'assets/images/gallery/small/9.jpg', 'assets/images/gallery/small/10.jpg'],
				'large'         : ['assets/images/gallery/large/5.jpg','assets/images/gallery/large/8.jpg', 'assets/images/gallery/large/9.jpg', 'assets/images/gallery/large/10.jpg'],
				'button_list'   :
				[
					{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/', 'new_window' : true },
					{ 'title':'Download', 'url':'http://porfolio.bonchen.net/', 'new_window' : true}
				],
				'tags'          : ['Portrait', 'Landscape']
			},
			{
				'title'         : 'Azuki bean',
				'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
				'thumbnail'     : ['assets/images/gallery/small/6.jpg', 'assets/images/gallery/small/13.jpg', 'assets/images/gallery/small/14.jpg', 'assets/images/gallery/small/15.jpg', 'assets/images/gallery/small/16.jpg'],
				'large'         : ['assets/images/gallery/large/6.jpg', 'assets/images/gallery/large/13.jpg', 'assets/images/gallery/large/14.jpg', 'assets/images/gallery/large/15.jpg', 'assets/images/gallery/large/16.jpg'],
				'button_list'   :
				[
					{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/', 'new_window' : true },
					{ 'title':'Download', 'url':'http://porfolio.bonchen.net/', 'new_window' : true}
				],
				'tags'          : ['Vintage']
			},
			{
				'title'         : 'Swiss chard pumpkin',
				'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
				'thumbnail'     : ['assets/images/gallery/small/8.jpg', 'assets/images/gallery/small/18.jpg', 'assets/images/gallery/small/19.jpg', 'assets/images/gallery/small/20.jpg'],
				'large'         : ['assets/images/gallery/large/8.jpg', 'assets/images/gallery/large/18.jpg', 'assets/images/gallery/large/19.jpg', 'assets/images/gallery/large/20.jpg'],
				'button_list'   :
				[
					{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/', 'new_window' : true },
					{ 'title':'Download', 'url':'http://porfolio.bonchen.net/', 'new_window' : true}
				],
				'tags'          : ['Landscape']
			},
			{
				'title'         : 'Spinach winter purslane',
				'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
				'thumbnail'     : ['assets/images/gallery/small/9.jpg','assets/images/gallery/small/15.jpg', 'assets/images/gallery/small/11.jpg', 'assets/images/gallery/small/10.jpg'],
				'large'         : ['assets/images/gallery/large/9.jpg','assets/images/gallery/large/15.jpg', 'assets/images/gallery/large/11.jpg', 'assets/images/gallery/large/10.jpg'],
				'button_list'   :
				[
					{ 'title':'Demo', 'url' : 'http://porfolio.bonchen.net/', 'new_window' : true },
					{ 'title':'Download', 'url':'http://porfolio.bonchen.net/', 'new_window' : true}
				],
				'tags'          : ['Vintage', 'Landscape']
			}

		]
	});
});