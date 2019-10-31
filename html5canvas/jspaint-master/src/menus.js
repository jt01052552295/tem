
var menus = {
	"&File": [
		{
			item: "&New",
			shortcut: "Ctrl+N",
			action: ()=> { file_new(); },
			description: "Creates a new document.",
		},
		{
			item: "&Open",
			shortcut: "Ctrl+O",
			action: ()=> { file_open(); },
			description: "Opens an existing document.",
		},
		{
			item: "&Save",
			shortcut: "Ctrl+S",
			action: ()=> { file_save(); },
			description: "Saves the active document.",
		},
		{
			item: "Save &As",
			shortcut: "Ctrl+Shift+S",
			// in mspaint, no shortcut is listed, but it supports F12; it doesn't support Ctrl+Shift+S
			action: ()=> { file_save_as(); },
			description: "Saves the active document with a new name.",
		},
		$MenuBar.DIVIDER,
		{
			item: "&Load From URL",
			// shortcut: "Ctrl+L",
			action: ()=> { file_load_from_url(); },
			description: "Opens an image from the web.",
		},
		{
			item: "&Upload To Imgur",
			action: ()=> {
				// include the selection in the saved image
				deselect();

				canvas.toBlob((blob)=> {
					sanity_check_blob(blob, ()=> {
						show_imgur_uploader(blob);
					});
				});
			},
			description: "Uploads the active document to Imgur",
		},
		$MenuBar.DIVIDER,
		{
			item: "Manage Storage",
			action: ()=> { manage_storage(); },
			description: "Manages storage of previously created or opened pictures.",
		},
		$MenuBar.DIVIDER,
		{
			item: "Print Pre&view",
			action: ()=> {
				print();
			},
			description: "Prints the active document and sets printing options.",
			//description: "Displays full pages.",
		},
		{
			item: "Page Se&tup",
			action: ()=> {
				print();
			},
			description: "Prints the active document and sets printing options.",
			//description: "Changes the page layout.",
		},
		{
			item: "&Print",
			shortcut: "Ctrl+P",
			action: ()=> {
				print();
			},
			description: "Prints the active document and sets printing options.",
		},
		$MenuBar.DIVIDER,
		{
			item: "Set As &Wallpaper (Tiled)",
			action: ()=> { set_as_wallpaper_tiled(); },
			description: "Tiles this bitmap as the desktop background.",
		},
		{
			item: "Set As Wallpaper (&Centered)", // in mspaint it's Wa&llpaper
			action: ()=> { set_as_wallpaper_centered(); },
			description: "Centers this bitmap as the desktop background.",
		},
		$MenuBar.DIVIDER,
		{
			item: "Recent File",
			enabled: false, // @TODO for desktop app
			description: "",
		},
		$MenuBar.DIVIDER,
		{
			item: "E&xit",
			shortcut: "Alt+F4",
			action: ()=> {
				close();
			},
			description: "Quits Paint.",
		}
	],
	"&Edit": [
		{
			item: "&Undo",
			shortcut: "Ctrl+Z",
			enabled: ()=> {
				return undos.length >= 1;
			},
			action: ()=> { undo(); },
			description: "Undoes the last action.",
		},
		{
			item: "&Repeat",
			shortcut: "F4",
			enabled: ()=> {
				return redos.length >= 1;
			},
			action: ()=> { redo(); },
			description: "Redoes the previously undone action.",
		},
		$MenuBar.DIVIDER,
		{
			item: "Cu&t",
			shortcut: "Ctrl+X",
			enabled: ()=> {
				// support cutting selected text with this menu item as well (e.g. in the text tool text box)
				return !!selection;
			},
			action: ()=> {
				edit_cut(true);
			},
			description: "Cuts the selection and puts it on the Clipboard.",
		},
		{
			item: "&Copy",
			shortcut: "Ctrl+C",
			enabled: ()=> {
				// support copying selected text with this menu item as well (e.g. in the text tool text box)
				return !!selection;
			},
			action: ()=> {
				edit_copy(true);
			},
			description: "Copies the selection and puts it on the Clipboard.",
		},
		{
			item: "&Paste",
			shortcut: "Ctrl+V",
			enabled: ()=> {
				// TODO: disable if nothing in clipboard or wrong type (if we can access that)
				return true;
			},
			action: ()=> {
				edit_paste(true);
			},
			description: "Inserts the contents of the Clipboard.",
		},
		{
			item: "C&lear Selection",
			shortcut: "Del",
			enabled: ()=> { return !!selection; },
			action: ()=> { delete_selection(); },
			description: "Deletes the selection.",
		},
		{
			item: "Select &All",
			shortcut: "Ctrl+A",
			action: ()=> { select_all(); },
			description: "Selects everything.",
		},
		$MenuBar.DIVIDER,
		{
			item: "C&opy To...",
			enabled: ()=> { return !!selection; },
			action: ()=> { save_selection_to_file(); },
			description: "Copies the selection to a file.",
		},
		{
			item: "Paste &From...",
			action: ()=> { paste_from_file_select_dialog(); },
			description: "Pastes a file into the selection.",
		}
	],
	"&View": [
		{
			item: "&Tool Box",
			shortcut: "Ctrl+T",
			checkbox: {
				toggle: ()=> {
					$toolbox.toggle();
				},
				check: ()=> {
					return $toolbox.is(":visible");
				},
			},
			description: "Shows or hides the tool box.",
		},
		{
			item: "&Color Box",
			shortcut: "Ctrl+L",
			checkbox: {
				toggle: ()=> {
					$colorbox.toggle();
				},
				check: ()=> {
					return $colorbox.is(":visible");
				},
			},
			description: "Shows or hides the color box.",
		},
		{
			item: "&Status Bar",
			checkbox: {
				toggle: ()=> {
					$status_area.toggle();
				},
				check: ()=> {
					return $status_area.is(":visible");
				},
			},
			description: "Shows or hides the status bar.",
		},
		{
			item: "T&ext Toolbar",
			enabled: false, // @TODO
			checkbox: {},
			description: "Shows or hides the text toolbar.",
		},
		$MenuBar.DIVIDER,
		{
			item: "E&xtras Menu",
			checkbox: {
				toggle: function() {
					$extras_menu_button.toggle();
					var checked = this.check();
					try{
						localStorage["jspaint extras menu visible"] = checked;
					// eslint-disable-next-line no-empty
					}catch(e){}
				},
				check: ()=> {
					return $extras_menu_button.is(":visible");
				}
			},
			description: "Shows or hides the Extras menu.",
		},
		$MenuBar.DIVIDER,
		{
			item: "&Zoom",
			submenu: [
				{
					item: "&Normal Size",
					shorcut: "Ctrl+PgUp",
					description: "Zooms the picture to 100%.",
					enabled: ()=> {
						return magnification !== 1;
					},
					action: ()=> {
						set_magnification(1);
					},
				},
				{
					item: "&Large Size",
					shorcut: "Ctrl+PgDn",
					description: "Zooms the picture to 400%.",
					enabled: ()=> {
						return magnification !== 4;
					},
					action: ()=> {
						set_magnification(4);
					},
				},
				{
					item: "C&ustom...",
					description: "Zooms the picture.",
					action: ()=> { show_custom_zoom_window(); },
				},
				$MenuBar.DIVIDER,
				{
					item: "Show &Grid",
					shorcut: "Ctrl+G",
					enabled: ()=> {
						return magnification >= 4;
					},
					checkbox: {
						toggle: toggle_grid,
						check: ()=> {
							return show_grid;
						},
					},
					description: "Shows or hides the grid.",
				},
				{
					item: "Show T&humbnail",
					enabled: false, // @TODO
					checkbox: {},
					description: "Shows or hides the thumbnail view of the picture.",
				}
			]
		},
		{
			item: "&View Bitmap",
			shortcut: "Ctrl+F",
			action: ()=> { view_bitmap(); },
			description: "Displays the entire picture.",
		}
	],
	"&Image": [
		{
			item: "&Flip/Rotate",
			shortcut: "Ctrl+R",
			action: ()=> { image_flip_and_rotate(); },
			description: "Flips or rotates the picture or a selection.",
		},
		{
			item: "&Stretch/Skew",
			// shortcut: "Ctrl+W", // closes browser tab
			action: ()=> { image_stretch_and_skew(); },
			description: "Stretches or skews the picture or a selection.",
		},
		{
			item: "&Invert Colors",
			shortcut: "Ctrl+I",
			action: ()=> { image_invert(); },
			description: "Inverts the colors of the picture or a selection.",
		},
		{
			item: "&Attributes...",
			shortcut: "Ctrl+E",
			action: ()=> { image_attributes(); },
			description: "Changes the attributes of the picture.",
		},
		{
			item: "&Clear Image",
			shortcut: "Ctrl+Shift+N",
			//shortcut: "Ctrl+Shft+N", [sic]
			action: ()=> { clear(); },
			description: "Clears the picture or selection.",
		},
		{
			item: "&Draw Opaque",
			checkbox: {
				toggle: ()=> {
					tool_transparent_mode = !tool_transparent_mode;
					$G.trigger("option-changed");
				},
				check: ()=> {
					return !tool_transparent_mode;
				},
			},
			description: "Makes the current selection either opaque or transparent.",
		}
	],
	"&Colors": [
		{
			item: "&Edit Colors...",
			action: ()=> {
				$colorbox.edit_last_color();
			},
			description: "Creates a new color.",
		},
		{
			item: "&Get Colors",
			action: ()=> {
				get_FileList_from_file_select_dialog((files)=> {
					var file = files[0];
					Palette.load(file, (err, new_palette)=> {
						if(err){
							show_error_message("This file is not in a format that paint recognizes, or no colors were found.");
						}else{
							palette = new_palette;
							$colorbox.rebuild_palette();
						}
					});
				});
			},
			description: "Uses a previously saved palette of colors.",
		},
		{
			item: "&Save Colors",
			action: ()=> {
				var blob = new Blob([JSON.stringify(palette)], {type: "application/json"});
				sanity_check_blob(blob, ()=> {
					saveAs(blob, "colors.json");
				});
			},
			description: "Saves the current palette of colors to a file.",
		}
	],
	"&Help": [
		{
			item: "&Help Topics",
			action: ()=> { show_help(); },
			description: "Displays Help for the current task or command.",
		},
		$MenuBar.DIVIDER,
		{
			item: "&About Paint",
			action: ()=> { show_about_paint(); },
			description: "Displays information about this application.",
			//description: "Displays program information, version number, and copyright.",
		}
	],
	"E&xtras": [
		{
			item: "&Render History As GIF",
			// shortcut: "Ctrl+Shift+G",
			action: ()=> { render_history_as_gif(); },
			description: "Creates an animation from the document history.",
		},
		// {
		// 	item: "Render History as &APNG",
		// 	// shortcut: "Ctrl+Shift+A",
		// 	action: ()=> { render_history_as_apng(); },
		// 	description: "Creates an animation from the document history.",
		// },
		// {
		// 	item: "Extra T&ool Box",
		// 	checkbox: {
		// 		toggle: ()=> {
		// 			// this doesn't really work well at all to have two toolboxes
		// 			// (this was not the original plan either)
		// 			$toolbox2.toggle();
		// 		},
		// 		check: ()=> {
		// 			return $toolbox2.is(":visible");
		// 		},
		// 	},
		// 	description: "Shows or hides an extra tool box.",
		// },
		// {
		// 	item: "&Preferences",
		// 	action: ()=> {
		// 		// :)
		// 	},
		// 	description: "Configures JS Paint.",
		// }
		/*{
			item: "&Draw Randomly",
			checkbox: {
				toggle: ()=> {
					if (window.simulatingGestures) {
						stopSimulatingGestures();
					} else {
						simulateRandomGesturesPeriodically();
					}
				},
				check: ()=> {
					return window.simulatingGestures;
				},
			},
			description: "Draws randomly with different tools.",
		},*/
		{
			item: "&Multi-User",
			submenu: [
				{
					item: "&New Session From Document",
					action: ()=> {
						var name = prompt("Enter the session name that will be used in the URL for sharing.");
						if(typeof name == "string"){
							name = name.trim();
							if(name == ""){
								show_error_message("The session name cannot be empty.");
							}else if(name.match(/[./[\]#$]/)){
								show_error_message("The session name cannot contain any of ./[]#$");
							}else{
								location.hash = "session:" + name;
							}
						}
					},
					description: "Starts a new multi-user session from the current document.",
				},
				{
					item: "New &Blank Session",
					action: ()=> {
						show_error_message("Not supported yet");
					},
					enabled: false,
					description: "Starts a new multi-user session from an empty document.",
				},
			]
		},
		{
			item: "&Themes",
			submenu: [
				{
					item: "&Classic",
					action: ()=> {
						set_theme("classic.css");
					},
					enabled: ()=> {
						return get_theme() != "classic.css"
					},
					description: "Makes JS Paint look like MS Paint from Windows 98.",
				},
				{
					item: "&Modern",
					action: ()=> {
						set_theme("modern.css");
					},
					enabled: ()=> {
						return get_theme() != "modern.css"
					},
					description: "Makes JS Paint look a bit more modern.",
				},
			]
		},
	],
};
