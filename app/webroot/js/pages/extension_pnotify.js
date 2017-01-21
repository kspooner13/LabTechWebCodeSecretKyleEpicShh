'use strict';

$(function() {	

	// Simple examples
	$('#pnotify-primary').on('click', function () {
		new PNotify({
			title: 'Primary notice',
			text: 'Check me out! I\'m a primary notice.',
			icon: 'icon-checkmark3',
			type: 'primary'
		});
	});
	
	$('#pnotify-danger').on('click', function () {
		new PNotify({
			title: 'Danger notice',
			text: 'Check me out! I\'m a danger notice.',
			icon: 'icon-blocked',
			type: 'error'
		});
	});
	
	$('#pnotify-success').on('click', function () {
		new PNotify({
			title: 'Success notice',
			text: 'Check me out! I\'m a success notice.',
			icon: 'icon-checkmark3',
			type: 'success'
		});
	});
	
	$('#pnotify-info').on('click', function () {
		new PNotify({
			title: 'Info notice',
			text: 'Check me out! I\'m a info notice.',
			icon: 'icon-info22',
			type: 'info'
		});
	});
	
	$('#pnotify-warning').on('click', function () {
		new PNotify({
			title: 'Warning notice',
			text: 'Check me out! I\'m a warning notice.',
			icon: 'icon-warning22',
			type: 'warning'
		});
	});
	
	// Solid examples
	$('#pnotify-primary-solid').on('click', function () {
		new PNotify({
			title: 'Primary notice',
			text: 'Check me out! I\'m a primary notice.',
			addclass: 'bg-primary'
		});
	});

	$('#pnotify-danger-solid').on('click', function () {
		new PNotify({
			title: 'Danger notice',
			text: 'Check me out! I\'m a danger notice.',
			addclass: 'bg-danger'
		});
	});

	$('#pnotify-success-solid').on('click', function () {
		new PNotify({
			title: 'Success notice',
			text: 'Check me out! I\'m a success notice.',
			addclass: 'bg-success'
		});
	});
	
	$('#pnotify-info-solid').on('click', function () {
		new PNotify({
			title: 'Info notice',
			text: 'Check me out! I\'m a info notice.',
			addclass: 'bg-info'
		});
	});

	$('#pnotify-warning-solid').on('click', function () {
		new PNotify({
			title: 'Warning notice',
			text: 'Check me out! I\'m a warning notice.',
			addclass: 'bg-warning'
		});
	});

	$('#pnotify-custom-solid').on('click', function () {
		new PNotify({
			title: 'Custom color notice',
			text: 'Check me out! I\'m a custom notice.',
			addclass: 'bg-indigo'
		});
	});

	// Desktop notofications
	$('#pnotify-default-desktop').on('click', function () {
		PNotify.desktop.permission();
		(new PNotify({
			title: 'Default Desktop Notice',
			text: 'If you\'ve given me permission, I\'ll appear as a desktop notification.',
			desktop: {
				desktop: true,
				addclass: 'bg-green',
				icon: 'assets/images/pnotify/default.png'
			}
		})
		).get().on("click",function(e) {
			if ($('.ui-pnotify-closer, .ui-pnotify-sticker, .ui-pnotify-closer *, .ui-pnotify-sticker *').is(e.target)) return;
			alert('Hey! You clicked the desktop notification!');
		});
	});

	$('#pnotify-danger-desktop').on('click', function () {
		PNotify.desktop.permission();
		(new PNotify({
			title: 'Danger Desktop Notice',
			type: 'danger',
			text: 'If you\'ve given me permission, I\'ll appear as a desktop notification.',
			desktop: {
				desktop: true,
				icon: 'assets/images/pnotify/danger.png'
			}
		})
		).get().on("click",function(e) {
			if ($('.ui-pnotify-closer, .ui-pnotify-sticker, .ui-pnotify-closer *, .ui-pnotify-sticker *').is(e.target)) return;
			alert('Hey! You clicked the desktop notification!');
		});
	});

	$('#pnotify-success-desktop').on('click', function () {
		PNotify.desktop.permission();
		(new PNotify({
			title: 'Success Desktop Notice',
			type: 'success',
			text: 'If you\'ve given me permission, I\'ll appear as a desktop notification.',
			desktop: {
				desktop: true,
				icon: 'assets/images/pnotify/success.png'
			}
		})
		).get().on("click",function(e) {
			if ($('.ui-pnotify-closer, .ui-pnotify-sticker, .ui-pnotify-closer *, .ui-pnotify-sticker *').is(e.target)) return;
			alert('Hey! You clicked the desktop notification!');
		});
	});

	$('#pnotify-info-desktop').on('click', function () {
		PNotify.desktop.permission();
		(new PNotify({
			title: 'Info Desktop Notice',
			type: 'info',
			text: 'If you\'ve given me permission, I\'ll appear as a desktop notification.',
			desktop: {
				desktop: true,
				icon: 'assets/images/pnotify/info.png'
			}
		})
		).get().on("click",function(e) {
			if ($('.ui-pnotify-closer, .ui-pnotify-sticker, .ui-pnotify-closer *, .ui-pnotify-sticker *').is(e.target)) return;
			alert('Hey! You clicked the desktop notification!');
		});
	});
	
	$('#pnotify-warning-desktop').on('click', function () {
		PNotify.desktop.permission();
		(new PNotify({
			title: 'Warning Desktop Notice',
			type: 'warning',
			text: 'If you\'ve given me permission, I\'ll appear as a desktop notification.',
			desktop: {
				desktop: true,
				icon: 'assets/images/pnotify/warning.png'
			}
		})
		).get().on("click",function(e) {
			if ($('.ui-pnotify-closer, .ui-pnotify-sticker, .ui-pnotify-closer *, .ui-pnotify-sticker *').is(e.target)) return;
			alert('Hey! You clicked the desktop notification!');
		});
	});

	// Advanced examples
	$('#pnotify-no-title').on('click', function () {
		new PNotify({
			text: 'Check me out! I\'m a notice without title.',
			addclass: 'bg-warning'
		});
	});

	$('#pnotify-rich-text').on('click', function () {
		new PNotify({
			title: 'Rich content notice',
			text: 'Look at my beautiful <strong>strong</strong>, <a href="#" class="alert-link">linked</a>, <em>emphasized</em>, and <u>underlined</u> text with <i class="icon-user"></i> icon.',
			icon: 'icon-info22'
		});
	});

	$('#pnotify-click-close').on('click', function () {
		var notice = new PNotify({
			title: 'Close on click',
			text: 'Click on me anywhere to dismiss me.',
			addclass: 'bg-info',
			hide: false,
			buttons: {
				closer: false,
				sticker: false
			}
		});
		notice.get().on("click",function() {
			notice.remove();
		});  
	});

	$('#pnotify-sticky-notice').on('click', function () {
		new PNotify({
			title: 'Sticky notice',
			text: 'Check me out! I\'m a sticky notice. You\'ll have to close me yourself.',
			addclass: 'bg-danger',
			hide: false
		});
	});

	$('#pnotify-permanent-buttons').on('click', function () {
		new PNotify({
			title: 'Permanent buttons notice',
			text: 'My buttons are really lonely, so they\'re gonna hang out with us.',
			addclass: 'bg-slate',
			buttons: {
				closer_hover: false,
				sticker_hover: false
			}
		});
	});
	
	$('#pnotify-permanent-notice').on('click', function () {
		var permanotice;
		if (permanotice) {
			permanotice.open();
		}
		else {
			permanotice = new PNotify({
				title: 'Now look here',
				text: 'There\'s something you need to know, and I won\'t go away until you come to grips with it.',
				addclass: 'bg-danger',
				hide: false,
				buttons: {
					closer: false,
					sticker: false
				}
			});
		}
	});
	
	$('#pnotify-non-blocking').on('click', function () {
		new PNotify({
			title: 'Non-Blocking Notice',
			addclass: 'bg-info-lighter',
			text: 'I\'m a special kind of notice called "non-blocking". When you hover over me I\'ll fade to show the elements underneath. Feel free to click any of them just like I wasn\'t even here.\n\nNote: HTML links don\'t trigger in some browsers, due to security settings.',
			nonblock: {
				nonblock: true,
				nonblock_opacity: .2
			}
		});
	});
	
	$('#pnotify-switching').on('click', function () {
		new PNotify({
			title: 'Notice',
			text: 'Right now I\'m a notice.',
			addclass: 'bg-primary',
			before_close: function(PNotify) {
				PNotify.update({
					title: 'Error',
					text: 'Uh oh. Now I\'ve become an error.',
					addclass: 'bg-danger',
					type: 'error',
					before_close: function(PNotify) {
						PNotify.update({
							title: 'Success',
							text: 'I fixed the error!',
							addclass: 'bg-success',
							type: 'success',
							before_close: function(PNotify) {
								PNotify.update({
									title: 'Info',
									text: 'Everything\'s cool now.',
									addclass: 'bg-info',
									type: 'info',
									before_close: null
								});
								PNotify.queueRemove();
								return false;
							}
						});
						PNotify.queueRemove();
						return false;
					}
				});
				PNotify.queueRemove();
				return false;
			}
		});
	});

	// Modules examples
	$('#pnotify-form-notice').on('click', function () {
		
		var notice = new PNotify({
			text: $('#form_notice').html(),
			width: '260px',
			hide: false,
			addclass: 'bg-amber',
			buttons: {
				closer: false,
				sticker: false
			},
			insert_brs: false
		});

		notice.get().find('button[name=cancel]').on('click', function() {
			notice.remove();
		})

		notice.get().submit(function() {
			var username = $(this).find('input[name=username]').val();
			if (!username) {
				alert('Please provide a username.');
				return false;
			}
			notice.update({
				title: 'Welcome',
				text: 'Successfully logged in as ' + username,
				addclass: 'bg-success',
				icon: true,
				width: PNotify.prototype.options.width,
				hide: true,
				buttons: {
					closer: true,
					sticker: true
				}
			});
			return false;
		});
	});
	
	$('#pnotify-promt-dialog').on('click', function () {

		// Setup
		var notice = new PNotify({
			title: 'Please input something',
			text: 'What is the name of your best friend?',
			hide: false,
			addclass: 'bg-info-lighter',
			confirm: {
				prompt: true,
				buttons: [
					{
						text: 'Submit',
						addClass: 'btn btn-sm btn-success'
					},
					{
						text: 'Cancel',
						addClass: 'btn btn-sm btn-default'
					}
				]
			},
			buttons: {
				closer: false,
				sticker: false
			},
			history: {
				history: false
			}
		});

		// On confirm
		notice.get().on('pnotify.confirm', function(e, notice, val) {
			notice.cancelRemove().update({
				title: 'You\'ve entered a name',
				text: 'Your best frind is ' + $('<div/>').text(val).html() + '.',
				icon: 'icon-checkmark3',
				type: 'success',
				addclass: 'bg-success',
				delay: 2000,
				hide: true,
				confirm: {
					prompt: false
				},
				buttons: {
					closer: true,
					sticker: true
				}
			});
		})

		// On cancel
		notice.get().on('pnotify.cancel', function(e, notice) {
			notice.cancelRemove().update({
				title: 'You don\'t have a best friend?',
				text: 'That\'s so sad!',
				icon: 'icon-blocked',
				addclass: 'bg-warning',
				type: 'warning',
				delay: 2000,
				hide: true,
				confirm: {
					prompt: false
				},
				buttons: {
					closer: true,
					sticker: true
				}
			});
		});
	});
	
	$('#pnotify-multi-line').on('click', function () {

		// Setup
		var notice = new PNotify({
			title: 'Input needed',
			text: 'Write me a poem, please.',
			hide: false,
			addclass: 'bg-info-lighter',
			confirm: {
				prompt: true,
				prompt_multi_line: true,
				prompt_default: 'Roses are red,\nViolets are blue,\n',
				buttons: [					
					{
						text: 'Submit',
						addClass: 'btn btn-sm btn-success'
					},
					{
						addClass: 'btn btn-sm btn-default'
					}
				]
			},
			buttons: {
				closer: false,
				sticker: false
			},
			history: {
				history: false
			}
		});

		// Confirm
		notice.get().on('pnotify.confirm', function(e, notice, val) {
			notice.cancelRemove().update({
				title: 'Your poem',
				text: $('<div/>').text(val).html(),
				icon: 'icon-checkmark3',
				type: 'success',
				addclass: 'bg-success',
				hide: true,
				confirm: {
					prompt: false
				},
				buttons: {
					closer: true,
					sticker: true
				}
			});
		});

		// On cancel
		notice.get().on('pnotify.cancel', function(e, notice) {
			notice.cancelRemove().update({
				title: 'You don\'t like poetry',
				text: 'Roses are dead,\nViolets are dead,\nI suck at gardening.',
				icon: 'icon-blocked',
				addclass: 'bg-warning',
				type: 'warning',
				hide: true,
				confirm: {
					prompt: false
				},
				buttons: {
					closer: true,
					sticker: true
				}
			});
		});
	});
	
	$('#pnotify-custom-buttons').on('click', function () {
		new PNotify({
			title: 'Choose a side',
			text: 'You have three options to choose from.',
			hide: false,
			width: 380,
			addclass: 'bg-info-lighter',
			confirm: {
				confirm: true,
				buttons: [
					{
						text: 'Fries',
						addClass: 'btn btn-sm btn-default',
						click: function(notice) {
							notice.update({
								title: 'You\'ve chosen a side',
								text: 'You want fries.',
								icon: 'icon-checkmark3',
								type: 'success',
								hide: true,
								addclass: 'bg-success',
								width: 260,
								confirm: {
									confirm: false
								},
								buttons: {
									closer: true,
									sticker: true
								}
							});
						}
					},
					{
						text: 'Mashed Potatoes',
						addClass: 'btn btn-sm btn-default',
						click: function(notice) {
							notice.update({
								title: 'You\'ve chosen a side',
								text: 'You want mashed potatoes.',
								icon: 'icon-checkmark3',
								type: 'success',
								addclass: 'bg-success',
								hide: true,
								width: 260,
								confirm: {
									confirm: false
								},
								buttons: {
									closer: true,
									sticker: true
								}
							});
						}
					},
					{
						text: 'Fruit',
						addClass: 'btn btn-sm btn-default',
						click: function(notice) {
							notice.update({
								title: 'You\'ve chosen a side',
								text: 'You want fruit.',
								icon: 'icon-checkmark3',
								type: 'success',
								hide: true,
								addclass: 'bg-success',
								width: 260,
								confirm: {
									confirm: false
								},
								buttons: {
									closer: true,
									sticker: true
								}
							});
						}
					}
				]
			},
			buttons: {
				closer: false,
				sticker: false
			},
			history: {
				history: false
			}
		});
	});
	
	$('#pnotify-confirm').on('click', function () {

		// Setup
		var notice = new PNotify({
			title: 'Confirmation',
			text: '<p>Are you sure you want to discard changes?</p>',
			hide: false,
			type: 'warning',
			width: 380,
			addclass: 'bg-warning-lighter',
			confirm: {
				confirm: true,
				buttons: [
					{
						text: 'Yes',
						addClass: 'btn btn-sm bg-danger-dark'
					},
					{
						addClass: 'btn btn-sm btn-default'
					}
				]
			},
			buttons: {
				closer: false,
				sticker: false
			},
			history: {
				history: false
			}
		})

		// On confirm
		notice.get().on('pnotify.confirm', function() {
			alert('Ok, cool.');
		})

		// On cancel
		notice.get().on('pnotify.cancel', function() {
			alert('Oh ok. Chicken, I see.');
		});
	});
	
	$('#pnotify-progress-loader').on('click', function () {
		var cur_value = 1,
		progress;

		// Make a loader.
		var loader = new PNotify({
			title: "Creating series of tubes",
			text: '<div class="progress progress-striped active progress-xs m-t-10">\
			<div class="progress-bar bg-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0">\
			<span class="sr-only">0%</span>\
			</div>\
			</div>',
			addclass: 'bg-primary',
			icon: 'icon-spinner4 spinner',
			hide: false,
			buttons: {
				closer: false,
				sticker: false
			},
			history: {
				history: false
			},
			before_open: function(PNotify) {
				progress = PNotify.get().find("div.progress-bar");
				progress.width(cur_value + "%").attr("aria-valuenow", cur_value).find("span").html(cur_value + "%");

				// Pretend to do something.
				var timer = setInterval(function() {
					if (cur_value >= 100) {

						// Remove the interval.
						window.clearInterval(timer);
						loader.remove();
						return;
					}
					cur_value += 1;
					progress.width(cur_value + "%").attr("aria-valuenow", cur_value).find("span").html(cur_value + "%");
				}, 65);
			}
		});
	});

	$('#pnotify-dynamic-progress').on('click', function () {
		var percent = 0;
		var notice = new PNotify({
			text: "Please wait",
			addclass: 'bg-danger',
			type: 'info',
			icon: 'icon-spinner4 spinner',
			hide: false,
			buttons: {
				closer: false,
				sticker: false
			},
			width: "200px"
		});

		setTimeout(function() {
		notice.update({
			title: false
		});
		var interval = setInterval(function() {
			percent += 2;
			var options = {
				text: percent + "% complete."
			};
			if (percent == 80) options.title = "Almost There";
			if (percent >= 100) {
				window.clearInterval(interval);
				options.title = "Done!";
				options.addclass = "bg-success";
				options.type = "success";
				options.hide = true;
				options.buttons = {
					closer: true,
					sticker: true
				};
				options.icon = 'icon-checkmark3';
				options.opacity = 1;
				options.width = PNotify.prototype.options.width;
			}
			notice.update(options);
			}, 120);
		}, 2000);
	});

	// Stack examples
	$('#pnotify-top-left').on('click', function () {
		show_stack_top_left('danger');
	});

	$('#pnotify-bottom-left').on('click', function () {
		show_stack_bottom_left('danger');
	});

	$('#pnotify-bottom-right').on('click', function () {
		show_stack_bottom_right('danger');
	});

	$('#pnotify-custom-left').on('click', function () {
		show_stack_custom_left('success');
	});

	$('#pnotify-custom-right').on('click', function () {
		show_stack_custom_right('success');
	});

	$('#pnotify-top-bar').on('click', function () {
		show_stack_custom_top('info');
	});

	$('#pnotify-bottom-bar').on('click', function () {
		show_stack_custom_bottom('info');
	});
	
	// Define directions
	var stack_top_left = {"dir1": "down", "dir2": "right", "push": "top"};
	var stack_bottom_left = {"dir1": "right", "dir2": "up", "push": "top"};
	var stack_bottom_right = {"dir1": "up", "dir2": "left", "firstpos1": 25, "firstpos2": 25};
	var stack_custom_left = {"dir1": "right", "dir2": "down"};
	var stack_custom_right = {"dir1": "left", "dir2": "up", "push": "top"};
	var stack_custom_top = {"dir1": "down", "dir2": "right", "push": "top", "spacing1": 1};
	var stack_custom_bottom = {"dir1": "up", "dir2": "right", "spacing1": 1};

	// Top left
	function show_stack_top_left(type) {
		var opts = {
			title: "Over here",
			text: "Check me out. I'm in a different stack.",
			addclass: "stack-top-left bg-primary",
			stack: stack_top_left
		};
		switch (type) {
			case 'error':
			opts.title = "Oh No";
			opts.text = "Watch out for that water tower!";
			opts.addclass = "stack-top-left bg-danger";
			opts.type = "error";
			break;

			case 'info':
			opts.title = "Breaking News";
			opts.text = "Have you met Ted?";
			opts.addclass = "stack-top-left bg-info";
			opts.type = "info";
			break;

			case 'success':
			opts.title = "Good News Everyone";
			opts.text = "I've invented a device that bites shiny metal asses.";
			opts.addclass = "stack-top-left bg-success";
			opts.type = "success";
			break;
		}
		new PNotify(opts);
	}

	// Bottom left
	function show_stack_bottom_left(type) {
		var opts = {
			title: "Over here",
			text: "Check me out. I'm in a different stack.",
			addclass: "stack-bottom-left bg-primary",
			stack: stack_bottom_left
		};
		switch (type) {
			case 'error':
			opts.title = "Oh No";
			opts.text = "Watch out for that water tower!";
			opts.addclass = "stack-bottom-left bg-danger";
			opts.type = "error";
			break;

			case 'info':
			opts.title = "Breaking News";
			opts.text = "Have you met Ted?";
			opts.addclass = "stack-bottom-left bg-info";
			opts.type = "info";
			break;

			case 'success':
			opts.title = "Good News Everyone";
			opts.text = "I've invented a device that bites shiny metal asses.";
			opts.addclass = "stack-bottom-left bg-success";
			opts.type = "success";
			break;
		}
		new PNotify(opts);
	}

	// Bottom right
	function show_stack_bottom_right(type) {
		var opts = {
			title: "Over here",
			text: "Check me out. I'm in a different stack.",
			addclass: "stack-bottom-right bg-primary",
			stack: stack_bottom_right
		};
		switch (type) {
			case 'error':
			opts.title = "Oh No";
			opts.text = "Watch out for that water tower!";
			opts.addclass = "stack-bottom-right bg-danger";
			opts.type = "error";
			break;

			case 'info':
			opts.title = "Breaking News";
			opts.text = "Have you met Ted?";
			opts.addclass = "stack-bottom-right bg-info";
			opts.type = "info";
			break;

			case 'success':
			opts.title = "Good News Everyone";
			opts.text = "I've invented a device that bites shiny metal asses.";
			opts.addclass = "stack-bottom-right bg-success";
			opts.type = "success";
			break;
		}
		new PNotify(opts);
	}

	// Custom left position
	function show_stack_custom_left(type) {
		var opts = {
			title: "Over here",
			text: "Check me out. I'm in a different stack.",
			addclass: "stack-custom-left bg-primary alert-styled-right",
			stack: stack_custom_left
		};
		switch (type) {
			case 'error':
			opts.title = "Oh No";
			opts.text = "Watch out for that water tower!";
			opts.addclass = "stack-custom-left bg-danger";
			opts.type = "error";
			break;

			case 'info':
			opts.title = "Breaking News";
			opts.text = "Have you met Ted?";
			opts.addclass = "stack-custom-left bg-info";
			opts.type = "info";
			break;

			case 'success':
			opts.title = "Good News Everyone";
			opts.text = "I've invented a device that bites shiny metal asses.";
			opts.addclass = "stack-custom-left bg-success";
			opts.type = "success";
			break;
		}
		new PNotify(opts);
	}

	// Custom right position
	function show_stack_custom_right(type) {
		var opts = {
			title: "Over here",
			text: "Check me out. I'm in a different stack.",
			addclass: "stack-custom-right bg-primary",
			stack: stack_custom_right
		};
		switch (type) {
			case 'error':
			opts.title = "Oh No";
			opts.text = "Watch out for that water tower!";
			opts.addclass = "stack-custom-right bg-danger";
			opts.type = "error";
			break;

			case 'info':
			opts.title = "Breaking News";
			opts.text = "Have you met Ted?";
			opts.addclass = "stack-custom-right bg-info";
			opts.type = "info";
			break;

			case 'success':
			opts.title = "Good News Everyone";
			opts.text = "I've invented a device that bites shiny metal asses.";
			opts.addclass = "stack-custom-right bg-success";
			opts.type = "success";
			break;
		}
		new PNotify(opts);
	}

	// Top bar
	function show_stack_custom_top(type) {
		var opts = {
			title: "Over here",
			text: "Check me out. I'm in a different stack.",
			width: "100%",
			cornerclass: "no-border-radius",
			addclass: "stack-custom-top bg-primary",
			stack: stack_custom_top
		};
		switch (type) {
			case 'error':
			opts.title = "Oh No";
			opts.text = "Watch out for that water tower!";
			opts.addclass = "stack-custom-top bg-danger";
			opts.type = "error";
			break;

			case 'info':
			opts.title = "Breaking News";
			opts.text = "Have you met Ted?";
			opts.addclass = "stack-custom-top bg-info";
			opts.type = "info";
			break;

			case 'success':
			opts.title = "Good News Everyone";
			opts.text = "I've invented a device that bites shiny metal asses.";
			opts.addclass = "stack-custom-top bg-success";
			opts.type = "success";
			break;
		}
		new PNotify(opts);
	}

	// Bottom bar
	function show_stack_custom_bottom(type) {
		var opts = {
			title: "Over here",
			text: "Check me out. I'm in a different stack.",
			width: "100%",
			cornerclass: "no-border-radius",
			addclass: "stack-custom-bottom bg-primary",
			stack: stack_custom_bottom
		};
		switch (type) {
			case 'error':
			opts.title = "Oh No";
			opts.text = "Watch out for that water tower!";
			opts.addclass = "stack-custom-bottom bg-danger";
			opts.type = "error";
			break;

			case 'info':
			opts.title = "Breaking News";
			opts.text = "Have you met Ted?";
			opts.addclass = "stack-custom-bottom bg-info";
			opts.type = "info";
			break;

			case 'success':
			opts.title = "Good News Everyone";
			opts.text = "I've invented a device that bites shiny metal asses.";
			opts.addclass = "stack-custom-bottom bg-success";
			opts.type = "success";
			break;
		}
		new PNotify(opts);
	}
});