<?php include_once('header.php'); ?>
		<div class="wrapper row2">
  			<div id="container" class="clear">
  				 <section class="clear">
			      	<figure>
			      		<h2 style="text-align:center; margin-bottom:15px; font-style:none; color:rgb(51,51,51); font-family: sans-serif;">Preliminary data analysis I: Users by Birth Years</h2>
			      		<!--<img src="img/UsersbyBirthYear.png" alt="" style="width:60%; float:left; margin-right:50px;">-->

			      		<link
    href="https://cdn.pydata.org/bokeh/release/bokeh-0.12.1.min.css"
    rel="stylesheet" type="text/css">
<link
    href="https://cdn.pydata.org/bokeh/release/bokeh-widgets-0.12.1.min.css"
    rel="stylesheet" type="text/css">

<script src="https://cdn.pydata.org/bokeh/release/bokeh-0.12.1.min.js"></script>
<script src="https://cdn.pydata.org/bokeh/release/bokeh-widgets-0.12.1.min.js"></script>

       


        <!-- COPY/PASTE SCRIPT HERE -->
<script type="text/javascript">
    Bokeh.$(function() {
    var docs_json = {"5fd06352-ab80-4a26-bc20-704af9f9fd1e":{"roots":{"references":[{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"8f789a4d-f2c9-4196-90c5-a870c246cfda","type":"Line"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"831c7f01-6885-44a4-b506-266e329dee17","type":"Line"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[16390,14562,9871,19562,21172,14907,9083,22552,26368,25565,21469,33626]}},"id":"ea662026-4cb5-4d9f-9a4e-67b6302a4f63","type":"ColumnDataSource"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[211603,189384,92729,203917,221837,155740,87173,215117,266714,255544,192243,308023]}},"id":"a9da37df-4d41-4de1-91d5-2f72b6dc7b46","type":"ColumnDataSource"},{"attributes":{"data_source":{"id":"8dbd8ded-d185-4600-aa60-75a485f4e5d2","type":"ColumnDataSource"},"glyph":{"id":"e46bd028-d1b2-4196-966f-17022e278c24","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"10476e35-e5e3-41ed-b0b3-bcd7d0819a3e","type":"Line"},"selection_glyph":null},"id":"6cdb78b9-badd-4b24-8f87-4f3af8d9ab62","type":"GlyphRenderer"},{"attributes":{"data_source":{"id":"554d527c-1455-49d2-ac33-e86f67cbb31f","type":"ColumnDataSource"},"glyph":{"id":"c8da6e5e-8075-4d93-9573-5989d177693e","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"831c7f01-6885-44a4-b506-266e329dee17","type":"Line"},"selection_glyph":null},"id":"2dcd564e-c5d7-4ec2-8373-a2dd6a370e1b","type":"GlyphRenderer"},{"attributes":{"line_alpha":{"value":0.7},"line_color":{"value":"red"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"25f001a0-d080-4c9d-9a8b-413b8fa663d2","type":"Line"},{"attributes":{"plot":null,"text":"NUMBER OF JOURNEYS MADE BY AGE GROUP"},"id":"c636cb44-84af-407e-8ab7-b13ffdf2151b","type":"Title"},{"attributes":{"data_source":{"id":"d75b8570-e0fd-476d-97e9-d7452c613330","type":"ColumnDataSource"},"glyph":{"id":"b9a2e5fe-804e-4653-a3c7-28b158fd674b","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"e35b4099-4868-431a-b077-e081242eac19","type":"Line"},"selection_glyph":null},"id":"ff75916f-6468-464e-ac90-0f2c9de50082","type":"GlyphRenderer"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"c1eb10c9-34f2-432c-bac6-eceb7d407d60","type":"Line"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[5424,4879,2915,6640,7120,5885,4006,9129,10581,10572,8404,12770]}},"id":"554d527c-1455-49d2-ac33-e86f67cbb31f","type":"ColumnDataSource"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"39f5256d-6550-424f-9ad6-e7547c2a94a2","type":"Line"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[332872,258389,126810,298476,340802,214245,108252,292642,384794,339207,243878,417071]}},"id":"a2cc2b16-83db-4d62-88b9-d64117285fa9","type":"ColumnDataSource"},{"attributes":{"line_alpha":{"value":0.7},"line_color":{"value":"navy"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"e540017a-6093-4163-8fa6-7e45addaa49f","type":"Line"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"6d6e5a3d-f48f-4dec-8bd3-c78e9919ead6","type":"Line"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[152404,140341,74402,160867,181942,129854,73869,179758,218826,214674,157535,248089]}},"id":"ba1960b1-a824-4b84-adf1-99eccd89bd1c","type":"ColumnDataSource"},{"attributes":{},"id":"fa63133c-18f4-48b7-836e-3ad8546eac78","type":"CategoricalTickFormatter"},{"attributes":{"bottom_units":"screen","fill_alpha":{"value":0.5},"fill_color":{"value":"lightgrey"},"left_units":"screen","level":"overlay","line_alpha":{"value":1.0},"line_color":{"value":"black"},"line_dash":[4,4],"line_width":{"value":2},"plot":null,"render_mode":"css","right_units":"screen","top_units":"screen"},"id":"f4a61197-9efd-453e-9982-048b3bde1778","type":"BoxAnnotation"},{"attributes":{"data_source":{"id":"ba1960b1-a824-4b84-adf1-99eccd89bd1c","type":"ColumnDataSource"},"glyph":{"id":"e540017a-6093-4163-8fa6-7e45addaa49f","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"186d28fe-e54d-4103-8d67-9e8b0f6a0d60","type":"Line"},"selection_glyph":null},"id":"fc7acbb9-cf1a-44d6-b267-1153279ebf0d","type":"GlyphRenderer"},{"attributes":{"plot":{"id":"ecc36196-041a-4152-8bd4-40914451a4a0","subtype":"Figure","type":"Plot"}},"id":"7c54071c-febd-436d-a37d-31c0d19d2979","type":"PanTool"},{"attributes":{"below":[{"id":"d828432c-d56c-4a05-8759-d988180d41b8","type":"CategoricalAxis"}],"left":[{"id":"6204627e-851e-4b15-a433-11d341d70d9c","type":"LinearAxis"}],"renderers":[{"id":"d828432c-d56c-4a05-8759-d988180d41b8","type":"CategoricalAxis"},{"id":"a89d1645-3a30-420a-af46-ea69907f658c","type":"Grid"},{"id":"6204627e-851e-4b15-a433-11d341d70d9c","type":"LinearAxis"},{"id":"09dfbe30-96fd-42dc-852a-676dac3e810c","type":"Grid"},{"id":"f4a61197-9efd-453e-9982-048b3bde1778","type":"BoxAnnotation"},{"id":"ff75916f-6468-464e-ac90-0f2c9de50082","type":"GlyphRenderer"},{"id":"3f21bdb9-b79b-4c6d-be44-e579daa886bf","type":"GlyphRenderer"},{"id":"ed6d26b2-d190-48fa-af69-bd435e9298fa","type":"GlyphRenderer"},{"id":"aed06244-09ae-4608-af19-2c012d493254","type":"GlyphRenderer"},{"id":"a424b111-60ff-42ab-9477-4d03a4235afc","type":"GlyphRenderer"},{"id":"f816d14a-f780-4f80-b26a-427b6d37523b","type":"GlyphRenderer"},{"id":"a69c67f5-392c-4c51-8a07-89b6424f3f57","type":"GlyphRenderer"},{"id":"fc7acbb9-cf1a-44d6-b267-1153279ebf0d","type":"GlyphRenderer"},{"id":"16f21c2d-4187-4e3f-8dd2-36690e830732","type":"GlyphRenderer"},{"id":"ab82a38b-c0a0-4de2-88af-bb449edb5bd0","type":"GlyphRenderer"},{"id":"c9cab059-9112-469a-9519-099b3f079a66","type":"GlyphRenderer"},{"id":"2dcd564e-c5d7-4ec2-8373-a2dd6a370e1b","type":"GlyphRenderer"},{"id":"6cdb78b9-badd-4b24-8f87-4f3af8d9ab62","type":"GlyphRenderer"},{"id":"62b71f6f-ac71-4d29-87a2-34934d20cbc2","type":"Legend"}],"right":[{"id":"62b71f6f-ac71-4d29-87a2-34934d20cbc2","type":"Legend"}],"title":{"id":"c636cb44-84af-407e-8ab7-b13ffdf2151b","type":"Title"},"tool_events":{"id":"07b35e95-6536-43c3-a440-28bdc6a5fc03","type":"ToolEvents"},"toolbar":{"id":"aebb7405-ebfd-4845-9605-8c9029f74e7e","type":"Toolbar"},"toolbar_location":"below","toolbar_sticky":false,"x_range":{"id":"2777d8f0-4cc7-4d3e-b74f-e3aaaff897ce","type":"FactorRange"},"y_range":{"id":"da97c12f-ac01-4499-9583-7f365a74a684","type":"DataRange1d"}},"id":"ecc36196-041a-4152-8bd4-40914451a4a0","subtype":"Figure","type":"Plot"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[97369,91124,49130,102207,113276,82390,48159,116961,143450,141546,114922,172161]}},"id":"3911bd34-2582-4e83-b00d-0078981c99d9","type":"ColumnDataSource"},{"attributes":{"data_source":{"id":"a9da37df-4d41-4de1-91d5-2f72b6dc7b46","type":"ColumnDataSource"},"glyph":{"id":"90ed38f7-e498-4cea-8e32-aaf0b5f6b175","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"700cb973-635c-4875-9b50-d980823d8072","type":"Line"},"selection_glyph":null},"id":"a69c67f5-392c-4c51-8a07-89b6424f3f57","type":"GlyphRenderer"},{"attributes":{"overlay":{"id":"f4a61197-9efd-453e-9982-048b3bde1778","type":"BoxAnnotation"},"plot":{"id":"ecc36196-041a-4152-8bd4-40914451a4a0","subtype":"Figure","type":"Plot"}},"id":"cf437f65-f1da-482d-ab0a-3da6b9a66c51","type":"BoxZoomTool"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"1cca979b-1c18-4bd9-bc68-a46ba1b4bc54","type":"Line"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"700cb973-635c-4875-9b50-d980823d8072","type":"Line"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[230271,223712,75864,203388,267029,178601,60108,184699,293900,273024,135605,272284]}},"id":"582c935e-481d-482e-8f19-2f0910b2203c","type":"ColumnDataSource"},{"attributes":{"line_alpha":{"value":0.7},"line_color":{"value":"skyblue"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"90ed38f7-e498-4cea-8e32-aaf0b5f6b175","type":"Line"},{"attributes":{"axis_label":"Yearly Quarters","formatter":{"id":"fa63133c-18f4-48b7-836e-3ad8546eac78","type":"CategoricalTickFormatter"},"plot":{"id":"ecc36196-041a-4152-8bd4-40914451a4a0","subtype":"Figure","type":"Plot"},"ticker":{"id":"3e59dbe8-9de2-482d-b916-7cd8110e5af9","type":"CategoricalTicker"}},"id":"d828432c-d56c-4a05-8759-d988180d41b8","type":"CategoricalAxis"},{"attributes":{"data_source":{"id":"582c935e-481d-482e-8f19-2f0910b2203c","type":"ColumnDataSource"},"glyph":{"id":"95cc0934-849e-431b-a82c-e0fb1188dbf4","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"39f5256d-6550-424f-9ad6-e7547c2a94a2","type":"Line"},"selection_glyph":null},"id":"3f21bdb9-b79b-4c6d-be44-e579daa886bf","type":"GlyphRenderer"},{"attributes":{"dimension":1,"plot":{"id":"ecc36196-041a-4152-8bd4-40914451a4a0","subtype":"Figure","type":"Plot"},"ticker":{"id":"0220d6f1-fa66-4be9-9bbd-37ca89d89f85","type":"BasicTicker"}},"id":"09dfbe30-96fd-42dc-852a-676dac3e810c","type":"Grid"},{"attributes":{"line_alpha":{"value":0.7},"line_color":{"value":"green"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"6b388b46-6d3d-4805-a637-7d6cbf4fa3e3","type":"Line"},{"attributes":{"line_alpha":{"value":0.7},"line_color":{"value":"lightgreen"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"95cc0934-849e-431b-a82c-e0fb1188dbf4","type":"Line"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[476388,360195,171830,414823,482496,283089,138500,410081,563867,485283,341626,607277]}},"id":"c1872606-ea58-46ec-9fe4-e360dc5d5478","type":"ColumnDataSource"},{"attributes":{"data_source":{"id":"32deb42f-d39d-455b-8289-700c40a79103","type":"ColumnDataSource"},"glyph":{"id":"6b388b46-6d3d-4805-a637-7d6cbf4fa3e3","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"fbb244cc-a580-4129-bfce-a3f6e9f9be5b","type":"Line"},"selection_glyph":null},"id":"ed6d26b2-d190-48fa-af69-bd435e9298fa","type":"GlyphRenderer"},{"attributes":{"line_alpha":{"value":0.7},"line_color":{"value":"purple"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"22f97881-7ff1-45c9-a2b3-2d17b990604c","type":"Line"},{"attributes":{"active":[0,1,2,3,4,5,6,7,8,9,10,11,12],"callback":{"id":"c9aa5d78-0edb-4335-886d-b543a15d820d","type":"CustomJS"},"labels":["15-20","20-25","25-30","30-35","35-40","40-45","45-50","50-55","55-60","60-65","65-70","70-75","75-80"],"width":100},"id":"8a874135-d35f-41fe-b137-65a849d643c8","type":"CheckboxGroup"},{"attributes":{"plot":{"id":"ecc36196-041a-4152-8bd4-40914451a4a0","subtype":"Figure","type":"Plot"}},"id":"dd593407-2a6a-4795-9ee8-d74050a14470","type":"WheelZoomTool"},{"attributes":{"data_source":{"id":"4a38f067-1745-4b9e-986b-b2a7fc56ff56","type":"ColumnDataSource"},"glyph":{"id":"22f97881-7ff1-45c9-a2b3-2d17b990604c","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"8f789a4d-f2c9-4196-90c5-a870c246cfda","type":"Line"},"selection_glyph":null},"id":"ab82a38b-c0a0-4de2-88af-bb449edb5bd0","type":"GlyphRenderer"},{"attributes":{"data_source":{"id":"3911bd34-2582-4e83-b00d-0078981c99d9","type":"ColumnDataSource"},"glyph":{"id":"4acf6b7c-86ed-46d6-ad0e-d988d1fcd69e","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"d8d74d56-d012-42f3-a192-61f94b2f7977","type":"Line"},"selection_glyph":null},"id":"16f21c2d-4187-4e3f-8dd2-36690e830732","type":"GlyphRenderer"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[46749,40970,24521,51437,56745,40303,26774,64483,78871,73830,63113,94295]}},"id":"4a38f067-1745-4b9e-986b-b2a7fc56ff56","type":"ColumnDataSource"},{"attributes":{"band_fill_alpha":{"value":0.1},"band_fill_color":{"value":"navy"},"plot":{"id":"ecc36196-041a-4152-8bd4-40914451a4a0","subtype":"Figure","type":"Plot"},"ticker":{"id":"3e59dbe8-9de2-482d-b916-7cd8110e5af9","type":"CategoricalTicker"}},"id":"a89d1645-3a30-420a-af46-ea69907f658c","type":"Grid"},{"attributes":{"format":"%4.1e"},"id":"cf7272ee-c609-4f5b-8c8f-64dc656e99c6","type":"PrintfTickFormatter"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"cc7ef190-5f62-4c74-8e88-ffccf886d7bc","type":"Line"},{"attributes":{"args":{"checkbox":{"id":"8a874135-d35f-41fe-b137-65a849d643c8","type":"CheckboxGroup"},"g0":{"id":"ff75916f-6468-464e-ac90-0f2c9de50082","type":"GlyphRenderer"},"g1":{"id":"3f21bdb9-b79b-4c6d-be44-e579daa886bf","type":"GlyphRenderer"},"g10":{"id":"c9cab059-9112-469a-9519-099b3f079a66","type":"GlyphRenderer"},"g11":{"id":"2dcd564e-c5d7-4ec2-8373-a2dd6a370e1b","type":"GlyphRenderer"},"g12":{"id":"6cdb78b9-badd-4b24-8f87-4f3af8d9ab62","type":"GlyphRenderer"},"g2":{"id":"ed6d26b2-d190-48fa-af69-bd435e9298fa","type":"GlyphRenderer"},"g3":{"id":"aed06244-09ae-4608-af19-2c012d493254","type":"GlyphRenderer"},"g4":{"id":"a424b111-60ff-42ab-9477-4d03a4235afc","type":"GlyphRenderer"},"g5":{"id":"f816d14a-f780-4f80-b26a-427b6d37523b","type":"GlyphRenderer"},"g6":{"id":"a69c67f5-392c-4c51-8a07-89b6424f3f57","type":"GlyphRenderer"},"g7":{"id":"fc7acbb9-cf1a-44d6-b267-1153279ebf0d","type":"GlyphRenderer"},"g8":{"id":"16f21c2d-4187-4e3f-8dd2-36690e830732","type":"GlyphRenderer"},"g9":{"id":"ab82a38b-c0a0-4de2-88af-bb449edb5bd0","type":"GlyphRenderer"}},"code":"\n    if (checkbox.active.includes(0)) {\n        g0.visible = true\n    } else {\n        g0.visible = false\n    }\n    if (checkbox.active.includes(1)) {\n        g1.visible = true\n    } else {\n        g1.visible = false\n    }\n    if (checkbox.active.includes(2)) {\n        g2.visible = true\n    } else {\n        g2.visible = false\n    }\n    if (checkbox.active.includes(3)) {\n        g3.visible = true\n    } else {\n        g3.visible = false\n    }\n    if (checkbox.active.includes(4)) {\n        g4.visible = true\n    } else {\n        g4.visible = false\n    }\n    if (checkbox.active.includes(5)) {\n        g5.visible = true\n    } else {\n        g5.visible = false\n    }\n       if (checkbox.active.includes(6)) {\n        g6.visible = true\n    } else {\n        g6.visible = false\n    }\n    if (checkbox.active.includes(7)) {\n        g7.visible = true\n    } else {\n        g7.visible = false\n    }\n    if (checkbox.active.includes(8)) {\n        g8.visible = true\n    } else {\n        g8.visible = false\n    }\n       if (checkbox.active.includes(9)) {\n        g9.visible = true\n    } else {\n        g9.visible = false\n    }\n    if (checkbox.active.includes(10)) {\n        g10.visible = true\n    } else {\n        g10.visible = false\n    }\n    if (checkbox.active.includes(11)) {\n        g11.visible = true\n    } else {\n        g11.visible = false\n    }\n    if (checkbox.active.includes(12)) {\n        g12.visible = true\n    } else {\n        g12.visible = false\n    }\n    \n\n"},"id":"c9aa5d78-0edb-4335-886d-b543a15d820d","type":"CustomJS"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[24696,36087,9449,21814,32928,32724,8531,21178,35301,45700,19337,36216]}},"id":"d75b8570-e0fd-476d-97e9-d7452c613330","type":"ColumnDataSource"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"d8d74d56-d012-42f3-a192-61f94b2f7977","type":"Line"},{"attributes":{"line_alpha":{"value":0.7},"line_color":{"value":"grey"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"c8da6e5e-8075-4d93-9573-5989d177693e","type":"Line"},{"attributes":{"children":[{"id":"8a874135-d35f-41fe-b137-65a849d643c8","type":"CheckboxGroup"}],"width":100},"id":"ef9e0f25-3a3e-423a-88ad-a4a179de992e","type":"WidgetBox"},{"attributes":{"data_source":{"id":"c1872606-ea58-46ec-9fe4-e360dc5d5478","type":"ColumnDataSource"},"glyph":{"id":"ca7640ca-ddd3-4648-b146-7e9f0a0dc327","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"6d6e5a3d-f48f-4dec-8bd3-c78e9919ead6","type":"Line"},"selection_glyph":null},"id":"aed06244-09ae-4608-af19-2c012d493254","type":"GlyphRenderer"},{"attributes":{"data_source":{"id":"a2cc2b16-83db-4d62-88b9-d64117285fa9","type":"ColumnDataSource"},"glyph":{"id":"1626e0b7-19e1-4ca0-8db0-cc6d83faa013","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"cc7ef190-5f62-4c74-8e88-ffccf886d7bc","type":"Line"},"selection_glyph":null},"id":"a424b111-60ff-42ab-9477-4d03a4235afc","type":"GlyphRenderer"},{"attributes":{"line_alpha":{"value":0.7},"line_color":{"value":"pink"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"1626e0b7-19e1-4ca0-8db0-cc6d83faa013","type":"Line"},{"attributes":{},"id":"07b35e95-6536-43c3-a440-28bdc6a5fc03","type":"ToolEvents"},{"attributes":{"line_alpha":{"value":0.7},"line_color":{"value":"violet"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"4acf6b7c-86ed-46d6-ad0e-d988d1fcd69e","type":"Line"},{"attributes":{"line_alpha":{"value":0.7},"line_color":{"value":"orange"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"ca7640ca-ddd3-4648-b146-7e9f0a0dc327","type":"Line"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"186d28fe-e54d-4103-8d67-9e8b0f6a0d60","type":"Line"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"10476e35-e5e3-41ed-b0b3-bcd7d0819a3e","type":"Line"},{"attributes":{"line_alpha":{"value":0.7},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"e46bd028-d1b2-4196-966f-17022e278c24","type":"Line"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[499815,398431,174314,444539,521910,312695,136043,419381,596231,510995,333223,639104]}},"id":"32deb42f-d39d-455b-8289-700c40a79103","type":"ColumnDataSource"},{"attributes":{},"id":"3e59dbe8-9de2-482d-b916-7cd8110e5af9","type":"CategoricalTicker"},{"attributes":{"line_alpha":{"value":0.7},"line_color":{"value":"yellow"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"b9a2e5fe-804e-4653-a3c7-28b158fd674b","type":"Line"},{"attributes":{"plot":{"id":"ecc36196-041a-4152-8bd4-40914451a4a0","subtype":"Figure","type":"Plot"}},"id":"1f0a9392-e835-42e9-bcaa-eec2ee58aea1","type":"SaveTool"},{"attributes":{"axis_label":"Number of Journeys","formatter":{"id":"cf7272ee-c609-4f5b-8c8f-64dc656e99c6","type":"PrintfTickFormatter"},"plot":{"id":"ecc36196-041a-4152-8bd4-40914451a4a0","subtype":"Figure","type":"Plot"},"ticker":{"id":"0220d6f1-fa66-4be9-9bbd-37ca89d89f85","type":"BasicTicker"}},"id":"6204627e-851e-4b15-a433-11d341d70d9c","type":"LinearAxis"},{"attributes":{"active_drag":"auto","active_scroll":"auto","active_tap":"auto","tools":[{"id":"7c54071c-febd-436d-a37d-31c0d19d2979","type":"PanTool"},{"id":"dd593407-2a6a-4795-9ee8-d74050a14470","type":"WheelZoomTool"},{"id":"cf437f65-f1da-482d-ab0a-3da6b9a66c51","type":"BoxZoomTool"},{"id":"1f0a9392-e835-42e9-bcaa-eec2ee58aea1","type":"SaveTool"},{"id":"308ac64b-8499-4c49-8b25-49a5cc450f22","type":"ResetTool"},{"id":"49cb85c8-35eb-4b8a-8908-5e9b1c6978ee","type":"HelpTool"}]},"id":"aebb7405-ebfd-4845-9605-8c9029f74e7e","type":"Toolbar"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"fbb244cc-a580-4129-bfce-a3f6e9f9be5b","type":"Line"},{"attributes":{"callback":null,"factors":["Q3-13","Q4-13","Q1-14","Q2-14","Q3-14","Q4-14","Q1-15","Q2-15","Q3-15","Q4-15","Q1-16","Q2-16"]},"id":"2777d8f0-4cc7-4d3e-b74f-e3aaaff897ce","type":"FactorRange"},{"attributes":{"plot":{"id":"ecc36196-041a-4152-8bd4-40914451a4a0","subtype":"Figure","type":"Plot"}},"id":"308ac64b-8499-4c49-8b25-49a5cc450f22","type":"ResetTool"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[276981,236405,114211,254391,281794,190953,101961,253081,320963,309649,208265,337964]}},"id":"1a5b2f34-00cc-4a12-8c27-c2079be14835","type":"ColumnDataSource"},{"attributes":{"plot":{"id":"ecc36196-041a-4152-8bd4-40914451a4a0","subtype":"Figure","type":"Plot"}},"id":"49cb85c8-35eb-4b8a-8908-5e9b1c6978ee","type":"HelpTool"},{"attributes":{},"id":"0220d6f1-fa66-4be9-9bbd-37ca89d89f85","type":"BasicTicker"},{"attributes":{"callback":null,"column_names":["y","x"],"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12],"y":[1130,1017,686,1255,1378,1085,546,1228,1641,1769,2087,2827]}},"id":"8dbd8ded-d185-4600-aa60-75a485f4e5d2","type":"ColumnDataSource"},{"attributes":{"children":[{"id":"ef9e0f25-3a3e-423a-88ad-a4a179de992e","type":"WidgetBox"},{"id":"ecc36196-041a-4152-8bd4-40914451a4a0","subtype":"Figure","type":"Plot"}]},"id":"1b60116c-78c7-4ec6-afcb-a0291be590bb","type":"Row"},{"attributes":{"line_alpha":{"value":0.7},"line_color":{"value":"brown"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"521fb15b-e15b-4340-8a89-b85f2d0c57cf","type":"Line"},{"attributes":{"data_source":{"id":"1a5b2f34-00cc-4a12-8c27-c2079be14835","type":"ColumnDataSource"},"glyph":{"id":"25f001a0-d080-4c9d-9a8b-413b8fa663d2","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"1cca979b-1c18-4bd9-bc68-a46ba1b4bc54","type":"Line"},"selection_glyph":null},"id":"f816d14a-f780-4f80-b26a-427b6d37523b","type":"GlyphRenderer"},{"attributes":{"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"line_width":{"value":4},"x":{"field":"x"},"y":{"field":"y"}},"id":"e35b4099-4868-431a-b077-e081242eac19","type":"Line"},{"attributes":{"legends":[["15-20",[{"id":"ff75916f-6468-464e-ac90-0f2c9de50082","type":"GlyphRenderer"}]],["20-25",[{"id":"3f21bdb9-b79b-4c6d-be44-e579daa886bf","type":"GlyphRenderer"}]],["25-30",[{"id":"ed6d26b2-d190-48fa-af69-bd435e9298fa","type":"GlyphRenderer"}]],["30-35",[{"id":"aed06244-09ae-4608-af19-2c012d493254","type":"GlyphRenderer"}]],["35-40",[{"id":"a424b111-60ff-42ab-9477-4d03a4235afc","type":"GlyphRenderer"}]],["40-45",[{"id":"f816d14a-f780-4f80-b26a-427b6d37523b","type":"GlyphRenderer"}]],["45-50",[{"id":"a69c67f5-392c-4c51-8a07-89b6424f3f57","type":"GlyphRenderer"}]],["50-55",[{"id":"fc7acbb9-cf1a-44d6-b267-1153279ebf0d","type":"GlyphRenderer"}]],["55-60",[{"id":"16f21c2d-4187-4e3f-8dd2-36690e830732","type":"GlyphRenderer"}]],["60-65",[{"id":"ab82a38b-c0a0-4de2-88af-bb449edb5bd0","type":"GlyphRenderer"}]],["65-70",[{"id":"c9cab059-9112-469a-9519-099b3f079a66","type":"GlyphRenderer"}]],["70-75",[{"id":"2dcd564e-c5d7-4ec2-8373-a2dd6a370e1b","type":"GlyphRenderer"}]],["75-80",[{"id":"6cdb78b9-badd-4b24-8f87-4f3af8d9ab62","type":"GlyphRenderer"}]]],"location":[0,-30],"plot":{"id":"ecc36196-041a-4152-8bd4-40914451a4a0","subtype":"Figure","type":"Plot"}},"id":"62b71f6f-ac71-4d29-87a2-34934d20cbc2","type":"Legend"},{"attributes":{"callback":null},"id":"da97c12f-ac01-4499-9583-7f365a74a684","type":"DataRange1d"},{"attributes":{"data_source":{"id":"ea662026-4cb5-4d9f-9a4e-67b6302a4f63","type":"ColumnDataSource"},"glyph":{"id":"521fb15b-e15b-4340-8a89-b85f2d0c57cf","type":"Line"},"hover_glyph":null,"nonselection_glyph":{"id":"c1eb10c9-34f2-432c-bac6-eceb7d407d60","type":"Line"},"selection_glyph":null},"id":"c9cab059-9112-469a-9519-099b3f079a66","type":"GlyphRenderer"}],"root_ids":["1b60116c-78c7-4ec6-afcb-a0291be590bb"]},"title":"Bokeh Application","version":"0.12.1"}};
    var render_items = [{"docid":"5fd06352-ab80-4a26-bc20-704af9f9fd1e","elementid":"6967b531-ba0b-4716-8624-9f7c47dafe31","modelid":"1b60116c-78c7-4ec6-afcb-a0291be590bb"}];
    
    Bokeh.embed.embed_items(docs_json, render_items);
});
</script>
			        	



			        	<figcaption style="line-height:1.5; font-size: 16px; color:rgb(130,130,130);">
					        <p style="margin-top:60px;">This graph illustrates the age distribution (via birth year) for the users of the New York City Citi Bike program between January 2015 (in red) and January 2016 (in blue). The graph demonstrates an increase in users whose birth years are after 1940. Note the anomalous birth years towards the left side of the graph. This demonstrates that subscribers to the bike program do not always give their correct birth year. The graph also demonstrates that most users are born in the mid to late 80s.</p>
							<p>This initial analysis demonstrates that subscribers do not always give their correct year and birth, and that people born after 2000 are as frequent users as those born in the 1940s. It should also be noted, that this analysis does not account for subscribers who access bikes more than once, as this data is not provided in the publicly available data set. </p>
							<p>This suggests that Citi bike marketing may wish to focus advertising and incentives for younger people (those born after 2000) to use the scheme, to maximize the program's growth and revenues</p>
			        	</figcaption>
			      	</figure>
			    </section>
			</div>
		</div>

		 <div class="bk-root">
    <div class="plotdiv" id="6967b531-ba0b-4716-8624-9f7c47dafe31"></div>
</div>

		<div class="wrapper row3">
		  	<footer id="footer" class="clear">
			    <p class="fl_left">New York City Citi bike: On the road to success?</p>
			    <p class="fl_right">By Ross Potter</p>
		  	</footer>
		</div>
	</body>
</html>

<!--
		<div class="wrapper row2">
  			<div id="container" class="clear">
  				 <section class="clear">
			      	<figure>
			      		<h2 style="text-align:center; margin-bottom:15px; font-style:none; color:rgb(51,51,51); font-family: sans-serif;">Preliminary data analysis I: Users by Birth Years</h2>
			      		<img src="img/UsersbyBirthYear.png" alt="" style="width:60%; float:left; margin-right:50px;">
			        	<figcaption style="line-height:1.5; font-size: 16px; color:rgb(130,130,130);">
					        <p style="margin-top:60px;">This graph illustrates the age distribution (via birth year) for the users of the New York City Citi Bike program between January 2015 (in red) and January 2016 (in blue). The graph demonstrates an increase in users whose birth years are after 1940. Note the anomalous birth years towards the left side of the graph. This demonstrates that subscribers to the bike program do not always give their correct birth year. The graph also demonstrates that most users are born in the mid to late 80s.</p>
							<p>This initial analysis demonstrates that subscribers do not always give their correct year and birth, and that people born after 2000 are as frequent users as those born in the 1940s. It should also be noted, that this analysis does not account for subscribers who access bikes more than once, as this data is not provided in the publicly available data set. </p>
							<p>This suggests that Citi bike marketing may wish to focus advertising and incentives for younger people (those born after 2000) to use the scheme, to maximize the program's growth and revenues</p>
			        	</figcaption>
			      	</figure>
			    </section>
			</div>
		</div>
		<div class="wrapper row3">
		  	<footer id="footer" class="clear">
			    <p class="fl_left">New York City Citi bike: On the road to success?</p>
			    <p class="fl_right">By Ross Potter</p>
		  	</footer>
		</div>
	</body>
</html>-->
