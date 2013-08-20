<link href="Spry-UI-1.7/css/Menu/basic/SpryMenuBasic.css" rel="stylesheet" type="text/css">
<script src="Spry-UI-1.7/includes/SpryDOMUtils.js" type="text/javascript"></script>
<script src="Spry-UI-1.7/includes/SpryDOMEffects.js" type="text/javascript"></script>
<script src="Spry-UI-1.7/includes/SpryWidget.js" type="text/javascript"></script>
<script src="Spry-UI-1.7/includes/SpryMenu.js" type="text/javascript"></script>
<script src="Spry-UI-1.7/includes/plugins/MenuBar2/SpryMenuBarKeyNavigationPlugin.js" type="text/javascript"></script>
<script src="Spry-UI-1.7/includes/plugins/MenuBar2/SpryMenuBarIEWorkaroundsPlugin.js" type="text/javascript"></script>
<style type="text/css">
/* BeginOAWidget_Instance_2141544: #MenuBar */
/* Settable values for skinning a Basic menu via presets. If presets are not sufficient, most skinning should be done in
	these rules, with the exception of the images used for down or right pointing arrows, which are in the file SpryMenuBasic.css
	
	 These assume the following widget classes for menu layout (set in a preset)
	.MenuBar - Applies to all menubars - default is horizontal bar, all submenus are vertical - 2nd level subs and beyond are pull-right.
	.MenuBarVertical - vertical main bar; all submenus are pull-right.
	
	You can also pass in extra classnames to set your desired top level menu bar layout. Normally, these are set by using a preset. 
	They only apply to horizontal menu bars:
		MenuBarLeftShrink - The menu bar will be horizontally 'shrinkwrapped' to be just large enough to hold its items, and left aligned
		MenuBarRightShrink - Just like MenuBarLeftShrink, but right aligned
		MenuBarFixedLeft - Fixed at a specified width set in the rule '.MenuBarFixedLeft', and left aligned.  
		MenuBarFixedCentered -  - Fixed at a specified width set in the rule '.MenuBarFixedCentered', 
						and centered in its parent container.
		MenuBarFullwidth - Grows to fill its parent container width.
 
	In general, all rules specified in this file are prefixed by #MenuBar so they only apply to instances of the widget inserted along
	with the rules. This permits use of multiple MenuBarBasic widgets on the same page with different layouts. Because of IE6 limitations,
	there are a few rules where this was not possible. Those rules are so noted in comments.
	
*/

#MenuBar  {
	background-color:#cccccc;	
	font-family: Arial, Helvetica, sans-serif; /* Specify fonts on on MenuBar and subMenu MenuItemContainer, so MenuItemContainer,
												MenuItem, and MenuItemLabel
												at a given level all use same definition for ems.
												Note that this means the size is also inherited to child submenus, 
												so use caution in using relative sizes other than
												100% on submenu fonts. */
	font-weight: normal;
	font-size: 16px;
	font-style: normal;
	padding:0;	
	border-color: #ffffff #ffffff #ffffff #ffffff; 
	border-width:0px;
	border-style: none none none none;
}
/* Caution: because ID+class selectors do not work properly in IE6, but we want to restrict these rules to just this
widget instance, we have used string-concatenated classnames for our selectors for the layout type of the menubar 
in this section. These have very low specificity, so be careful not to accidentally override them. */

.MenuBar br { /* using just a class so it has same specificity as the ".MenuBarFixedCentered br" rule bleow */
	display:none;
}
.MenuBarLeftShrink {
	float: left; /* shrink to content, as well as float the MenuBar */
	width: auto;
}
.MenuBarRightShrink {
	float: right; /* shrink to content, as well as float the MenuBar */
	width: auto;
}
.MenuBarFixedLeft {
	float: left;
	width: 80em;
}
.MenuBarFixedCentered {
	float: none;
	width: 80em;
	margin-left:auto;
	margin-right:auto;
}
.MenuBarFixedCentered br {
	clear:both;
	display:block;
}
.MenuBarFixedCentered .SubMenu br {
	display:none;
}
.MenuBarFullwidth {
	float: left;
	width: 100%;
}

/* Top level menubar items - these actually apply to all items, and get overridden for 1st or successive level submenus */
#MenuBar  .MenuItemContainer {
	padding: 0px 0px 0px 0px; 
	margin: 0; 	/* Zero out margin  on the item containers. The MenuItem is the active hover area.
				For most items, we have to do top or bottom padding or borders only on the MenuItem 
				or a child so we keep the entire submenu tiled with items.
				Setting this to 0 avoids "dead spots" for hovering. */
}
#MenuBar  .MenuItem {
	padding: 0px 24px 0px 0px; 
	background-color:#cccccc;	
	border-width:1px;
	border-color: #cccccc #ffffff #cccccc #ffffff; 
	border-style: none solid none solid;
}
#MenuBar  .MenuItemFirst {
	border-style: none none none none;
}
#MenuBar .MenuItemLast {
	border-style: none solid none none;
}

#MenuBar  .MenuItem  .MenuItemLabel{
	text-align:center;
	line-height:1.4em;
	color:#333333;
	background-color:#cccccc;
	padding: 6px 15px 6px 39px;
	width: 10em;
	width:auto; 
}
.SpryIsIE6 #MenuBar  .MenuItem  .MenuItemLabel{
	width:1em; /* Equivalent to min-width in modern browsers */
}

/* First level submenu items */
#MenuBar .SubMenu  .MenuItem {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: normal;
	font-size: 14px;
	font-style: normal;
	background-color:#ffffff;
	padding:0px 2px 0px 0px;
	border-width:1px;
	border-color: #cccccc #cccccc #cccccc #cccccc; 
	/* Border styles are overriden by first and last items */
	border-style: solid solid none solid;
}
#MenuBar  .SubMenu .MenuItemFirst {
	border-style: solid solid none solid;
}
#MenuBar  .SubMenu .MenuItemFirst .MenuItemLabel{
	padding-top: 6px; 
}
#MenuBar .SubMenu .MenuItemLast {
	border-style: solid solid solid solid;
}
#MenuBar .SubMenu .MenuItemLast .MenuItemLabel{
	padding-bottom: 6px; 
}
#MenuBar .SubMenu .MenuItem .MenuItemLabel{
	text-align:left;
	line-height:1em;	
	background-color:#ffffff;
	color:#333333;
	padding: 6px 12px 6px 5px; 
	width: 7em;
	 
}

/* Hover states for containers, items and labels */
#MenuBar .MenuItemHover {
	background-color: #999999;
	border-color: #cccccc #cccccc #cccccc #cccccc; 
}

#MenuBar .MenuItemWithSubMenu.MenuItemHover .MenuItemLabel{
	background-color: #999999; /* consider exposing this prop separately*/
	color: #000000;
}
#MenuBar .MenuItemHover .MenuItemLabel{
	background-color: #999999;
	color: #000000;
}
#MenuBar .SubMenu .MenuItemHover {
	background-color: #cccccc; 
	border-color: #cccccc #cccccc #cccccc #cccccc; 
}

#MenuBar .SubMenu .MenuItemHover .MenuItemLabel{
	background-color: #cccccc; 
	color: #333333;
}
/* Submenu properties -- First level of submenus */
#MenuBar .SubMenuVisible {
	background-color: #ffffff;
	min-width:0%;  /* This keeps the menu from being skinnier than the parent MenuItemContainer - nice to have but not available on ie6 */
	border-color: #ffffff #ffffff #ffffff #ffffff; 
	border-width:0px;
	border-style: none none none none;
}
#MenuBar.MenuBar .SubMenuVisible {/* For Horizontal menubar only */
	top: 100%;	/* 100% is at the bottom of parent menuItemContainer */
	left:0px; /* 'left' may need tuning depending upon borders or padding applied to menubar MenuItemContainer or MenuItem, 
					and your personal taste.
					0px will left align the dropdown with the content area of the MenuItemContainer. Assuming you keep the margins 0 
					on MenuItemContainer and MenuItem on the parent
					menubar, making this equal the sum of the MenuItemContainer & MenuItem padding-left will align 
					the dropdown with the left of the menu item label.*/
	z-index:10;
}
#MenuBar.MenuBarVertical .SubMenuVisible {
	top: 0px;	
	left:100%;
	min-width:0px; /* Do not neeed to match width to parent MenuItemContainer - items will prevent total collapse */
}
/* Submenu properties -- Second level submenu and beyond - these are visible descendents of .MenuLevel1 */
#MenuBar .MenuLevel1 .SubMenuVisible {
	background-color: #ffffff;
	min-width:0px; /* Do not neeed to match width to parent MenuItemContainer - items will prevent total collapse*/
	top: 0px;	/* If desired, you can move this down a smidge to separate top item''s submenu from menubar - 
				that is really only needed for submenu on first item of MenuLevel1, or you can make it negative to make submenu more
				vertically 'centered' on its invoking item */
	left:100%; /* If you want to shift the submenu left to partially cover its invoking item, you can add a margin-left with a 
				negative value to this rule. Alternatively, if you use fixed-width items, you can change this left value
				to use px or ems to get the offset you want. */
}
/* IE6 rules - you can delete these if you do not want to support IE6 */

/* A note about multiple classes in IE6.
 * Some of the rules above use multiple class names on an element for selection, such as "hover" (MenuItemHover) and "has a subMenu" (MenuItemWithSubMenu),
 * giving the selector '.MenuItemWithSubMenu.MenuItemHover'.
 * Unfortunately IE6 does not support using mutiple classnames in a selector for an element. For a selector such as '.foo.bar.baz', IE6 ignores
 * all but the final classname (here, '.baz'), and sets the specificity accordingly, counting just one of those classs as significant. To get around this 
 * problem, we use the plugin in SpryMenuBarIEWorkaroundsPlugin.js to generate compound classnames for IE6, such as 'MenuItemWithSubMenuHover'. 
 * Since there are a lot of these needed, the plugin does not generate the extra classes for modern browsers, and we use the CSS2 style mutltiple class
 * syntax for that. Since IE6 both applies rules where 
 * it should not, and gets the specificity wrong too, we have to order rules carefully, so the rule misapplied in IE6 can be overridden. 
 * So, we put the multiple class rule first. IE6 will mistakenly apply this rule.  We follow this with the single-class rule that it would 
 * mistakenly override, making sure the  misinterpreted IE6 specificity is the same as the single-class selector, so the latter wins. 
 * We then create a copy of the multiple class rule, adding a '.SpryIsIE6' class as context, and making sure the specificity for
 * the selector is high enough to beat the single-class rule in the "both classes match" case. We place the IE6 rule at the end of the 
 * css style block to make it easy to delete if you want to drop IE6 support.
 * If you decide you do not need IE6 support, you can get rid of these, as well as the inclusion of the SpryMenuBarIEWorkaroundsPlugin.js script.
 * The 'SpryIsIE6' class is placed on the HTML element by  the script in SpryMenuBarIEWorkaroundsPlugin.js if the browser is Internet Explorer 6. This avoids the necessity of IE conditional comments for these rules.
 */
.SpryIsIE6 #MenuBar .MenuBarView .MenuItemWithSubMenuHover .MenuItemLabel /* IE6 selector  */{
	background-color: #999999; /* consider exposing this prop separately*/
	color: #000000;
}
.SpryIsIE6 #MenuBar .MenuBarView .SubMenu .MenuItemWithSubMenuHover .MenuItemLabel/* IE6 selector  */{
	background-color: #cccccc; /* consider exposing this prop separately*/
	color: #333333;
}
.SpryIsIE6 #MenuBar .SubMenu .SubMenu  /* IE6 selector  */{
	margin-left: -0px; /* Compensates for at least part of an IE6 "double padding" version of the "double margin" bug */
}

	
/* EndOAWidget_Instance_2141544 */
</style>
<script type="text/xml">
<!--
<oa:widgets>
  <oa:widget wid="2141544" binding="#MenuBar" />
</oa:widgets>
-->
</script>
<body>
 <ul id="MenuBar">
	  
	    <li> <a href="#">Department Links</a>
	      <ul>
	        <li> <a href="#">About</a></li>
	        <li> <a href="#">Faculty</a>
	          <ul>
	            <li> <a href="#">Hits</a></li>
	            <li> <a href="#">Ragga</a></li>
	            <li> <a href="#">Country</a></li>
              </ul>
            </li>
	        <li> <a href="#">Staff</a>
	          <ul>
	            <li> <a href="#">Hollywood</a></li>
	            <li> <a href="#">NY Beat</a></li>
	            <li> <a href="#">London Scene</a></li>
              </ul>
            </li>
	        <li> <a href="#">Research</a></li>
          </ul>
        </li>
      </ul>
	  <script type="text/javascript">
// BeginOAWidget_Instance_2141544: #MenuBar
var MenuBar = new Spry.Widget.MenuBar2("#MenuBar", {
      widgetID: "MenuBar",
	  widgetClass: "MenuBar  MenuBarLeftShrink",
	  insertMenuBarBreak: true,
      mainMenuShowDelay: 100,
      mainMenuHideDelay: 200,
      subMenuShowDelay: 200,
      subMenuHideDelay: 200
      });
// EndOAWidget_Instance_2141544
      </script>
      </body>