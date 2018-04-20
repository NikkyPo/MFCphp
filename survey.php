<?php
	include('includes/header.php');

	$db = pg_connect('host=localhost port=5432 dbname=postgres user=postgres password=postgres');
	$query = "INSERT INTO survey VALUES ('$_POST[project_name]', '$_POST[geopoint]', '$_POST[geodescription]', '$_POST[contact]', '$_POST[organization]', '$_POST[email]','$_POST[description]', '$_POST[learning]', '$_POST[resources]', '$_POST[website]', '$_POST[connected]', '$_POST[connectedresult]', '$_POST[categories]', '$_POST[skillssubcategory]', '$_POST[affordabilitysubcategory]', '$_POST[availabilitysubcategory]', '$_POST[infrastructuresubcategory]', '$_POST[skillschildrenstrategy]', '$_POST[skillsadultstrategy]', '$_POST[skillsprofessionalstrategy]', '$_POST[affordabilitybuystrategy]', '$_POST[affordabilitysellstrategy]', '$_POST[availabilityplacestrategy]', '$_POST[availabilityclimatestrategy]', '$_POST[accessibilitytransportationstrategy]', '$_POST[infrastructureagriculturestrategy]', '$_POST[infrastructurephysicalstrategy]', '$_POST[infrastructurelocalstrategy]', '$_POST[infrastructurefarmlandstrategy]', '$_POST[infrastructurefarmerstrategy]', '$_POST[infrastructurelaborstrategy]', '$_POST[infrastructurehealthystrategy]', '$_POST[infrastructurefoodstrategy]', '$_POST[infrastructureinfluencestrategy]')";
	$result = pg_query($query);

?>

<div id="formstyle">
	<br>

<form method="post" action="" class="surveyForm1">
	<br><h3>The Minnesota Food Charter Survey</h3><br>
	<h4><p>This survey is intended to gather information that can help individuals and organizations connect with information, resources, and others doing simliar work that advances the Minnesota Food Charter strategies.</p></h4><br>
	
	<div class="form-group">
		<label for="project_name" class="control-label">What is the title of your project?
			<input class="form-control" type="text" maxlength="100" placeholder="" id="project_name" name="project_name" required>
		</label>
	</div>

	<div class="form-group">
		<label for="geopoint" class="control-label">Where is your project located? 
			<input class="form-control" type="text" maxlength="100" placeholder="" id="geopoint" name="geopoint" required>
		</label>
	</div>

	<div class="form-group">
		<label for="geodescription" class="control-label">Geographic description
			<textarea class="form-control" maxlength="300" id="geodescription" name="geodescription" rows="4" required></textarea>
		</label>
	</div>

	<div class="form-group">
		<label for="contact" class="control-label">Please provide the name of the primary contact for the project. 
			<input class="form-control" type="text" maxlength="100" placeholder="" id="contact" name="contact" required>
		</label>
	</div>	

	<div class="form-group">
		<label for="organization" class="control-label">Organization for primary contact. 
			<input class="form-control" type="text" maxlength="100" placeholder="" id="organization" name="organization" required>
		</label>
	</div>	

	<div class="form-group">
		<label for="email" class="control-label">Email address for primary contact.
			<input class="form-control" type="text" maxlength="100" placeholder="" id="email" name="email" required>
		</label>
	</div>		

	<div class="form-group">
		<label for="description" class="control-label">Brief description of the project - what are you trying to accomplish and how are you going about it?<br>
			<textarea class="form-control" maxlength="300" id="description" name="description" rows="4" required></textarea>
		</label>
	</div>

	<div class="form-group">
		<label for="learning" class="control-label">What would you like to learn?
			<textarea class="form-control" maxlength="300" id="learning" name="learning" rows="4"></textarea>
		</label>
	</div>

	<div class="form-group">
		<label for="resources" class="control-label">What resources can you offer to others?
			<textarea class="form-control" maxlength="300" id="resources" name="resources" rows="4"></textarea>
		</label>
	</div>

	<div class="form-group">
		<label for="website" class="control-label">Please list any websites associated with the project.
			<textarea class="form-control" type="url" maxlength="300" id="website" name="website" rows="4"></textarea>
		</label>
	</div>

	<H3>Categories, Subcategories and Strategies</H3>
	<br>
	<div class="form-group">
		<label class="control-label">Is this project connected with a food network? Click <a href="http://www.extension.umn.edu/family/health-and-nutrition/partner-with-us/food-networks/food-networks-in-mn/#map" target="_blank">HERE</a> for a list of food networks in Minnesota</label>
		<div class="radio">
			<label>
				<input type="radio" name="connected" value="yes">Yes<br>
			</label>
		</div>
		<div class="radio">
			<label>
				<input type="radio" name="connected" value="no">No<br>
			</label>
		</div>
		<div class="radio">
			<label>
				<input type="radio" name="connected" value="notsure">Not sure
			</label>
		</div>
	</div>

	<div id="problem" class="form-group hidden connectedresult">
		<label>Which food network is this project associated with?
			<input type="text" maxlength="100" placeholder="" id="connectedresult" name="connectedresult">
		</label>
	</div>

	<div class="form-group">
		<label class="control-label">Please indicate which categories from the <a href= "http://mnfoodcharter.com/" target="_blank"> Minnesota Food Charter</a> are associated with the project:
		</label>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="categories" value="skills">Food Skills - Growing food; planning, selecting,and budgeting for healthy food; preparing safe, healthy food from scratch; trying new foods; understanding the food system
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="categories" value="affordability">Food Affordability - People can buy most or all of the healthy foods they want with the money they have available
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="categories" value="availability">Food Availability - There are an adequate number of convenient food sources, offering a sufficient number and variety of healthy options in a community
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="categories" value="accessibility">Food Accessibility - Sources for healthy food are easy to get to at a manageable distance from home or work, using affordable and convenient personal or public transportation
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="categories" value="infrastructure">Food Infrastructure - the underlying physical, policy, and organizational structures needed for our food supply's operation, services, and facilities
			</label>
		</div>
	</div>

	<div class="form-group hidden" id="skills">
		<label class="control-label">Please choose a <a href ="http://mnfoodcharter.com/the-charter/food-skills/" target="_blank">Food Skills</a> subcategory associated with the project:</label>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="skillssubcategory" value="children">Children, Youth and Young Adults
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="skillssubcategory" value="adults">Adults
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="skillssubcategory" value="professionals">Food Service Professionals
			</label>
		</div>
	</div>

	<div class="form-group hidden" id="affordability">
		<label class="control-label">Please choose a <a href ="http://mnfoodcharter.com/the-charter/food-affordability/" target="_blank"> Food Affordability</a> subcategory associated with the project:</label>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="affordabilitysubcategory" value="buy">Buying Food
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="affordabilitysubcategory" value="sell">Selling Food
			</label>
		</div>
	</div>

	<div class="form-group hidden" id="availability">
		<label class="control-label">Please choose a <a href ="http://mnfoodcharter.com/the-charter/food-availability/" target="_blank"> Food Availability</a> subcategory associated with the project:
		</label>
		<div class="checkbox">
			<label> 
				<input type="checkbox" name="availabilitysubcategory" value="places">Places and Options
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="availabilitysubcategory" value="climate">Climate and Environment
			</label>
		</div>
	</div>

	<div class="form-group hidden" id="infrastructure">
		<label class="control-label">Please choose a <a href ="http://mnfoodcharter.com/the-charter/food-infrastructure/" target="_blank">Food Infrastructure</a> subcategory associated with the project:
		</label>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructuresubcategory" value="agriculture">Agriculture and Food Research, Technologies, and Practices
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructuresubcategory" value="physical">Physical and Financial Infrastructure
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructuresubcategory" value="local">Local Markets
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructuresubcategory" value="farmland">Farmland Access and Preservation
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructuresubcategory" value="farmer">Farmer Training and Resources
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructuresubcategory" value="labor">Labor and Pay
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructuresubcategory" value="healthy">Healthy Food and Agriculture Policy
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructuresubcategory" value="food">Food Labeling, Regulations, and Marketing
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructuresubcategory" value="influence">Influence and Decision-Making
			</label>
		</div>
	</div>

	<div class="form-group hidden" id="children">
		<label class="control-label">Please choose a <a href ="http://mnfoodcharter.com/the-charter/food-skills/" target="_blank">Food Skills</a> - Children, Youth and Young Adults strategy associated with the project:
		</label>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="skillschildrenstrategy" value="1">	Establish a food skills baseline for children, youth, and young adults in Minnesota to determine the extent of the food skills gap.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="skillschildrenstrategy" value="2">	Use food skills baseline assessments to inform district-wide wellness policies and design of food skills programs and curriculum in school districts.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="skillschildrenstrategy" value="3">	Establish dedicated state staff positions for family and consumer sciences education and health education.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="skillschildrenstrategy" value="4">	Provide training, continuing education credits, and incentives to early childcare providers who incorporate food skills education into their programs.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="skillschildrenstrategy" value="5">	Train teachers, coaches and other educational staff to guide children of all ages to make healthy food choices, using evidence based methods.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="skillschildrenstrategy" value="6">	Offer adequate support for curriculum development and use, teacher training, and school resources, toward the goal of basic food skills for every Minnesota middle school student.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="skillschildrenstrategy" value="7">Require and train teachers to incorporate food skills education into existing curricula, particularly in math, science, and social studies.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="skillschildrenstrategy" value="8">Require and financially support K-12 guidelines development for food skills education in Minnesota schools.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="skillschildrenstrategy" value="9">Support school gardens, curriculum development, and teacher training to teach all Minnesota second graders the principles of plant biology and basic gardening skills.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="skillschildrenstrategy" value="10">Increase number and capacity of farm-to-school programs.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="skillschildrenstrategy" value="11">Institute and sustain college-level curricular requirements and extra-curricular options, including farm-to-cafeteria efforts, to strengthen students' food skills.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="skillschildrenstrategy" value="12">Ensure support and training needed for tribal communities to host culture camps focusing on traditional foods and related teachings.
			</label>
		</div>
	</div>

	<div class="form-group hidden" id="adults">
		<label class="control-label">Please choose a <a href ="http://mnfoodcharter.com/the-charter/food-skills/" target="_blank">Food Skills</a>  - Adults strategy:
		</label>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="skillsadultstrategy" value="13">Increase adults' opportunities to learn food skills at schools, worksites, community  education classes, hunger relief programs, and food stores.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="skillsadultstrategy" value="14">Provide patients with appropriate information about food skills education and referrals to relevant community resources, when they visit their healthcare provider.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="skillsadultstrategy" value="15">Offer knowledge and resources needed by food harvesters to harvest wild rice; catch, gather, and preserve fish, plant foods and berries; and tap, process, and store maple syrup and sugar.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="skillsadultstrategy" value="16">Establish accessible, adequate gardening plots, equipment-lending libraries, garden education options, and seed and seedling giveaways.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="skillsadultstrategy" value="17">Offer employees paid time and free courses to strengthen food skills, and offer flexible work schedules to accommodate time needed to plan and prepare healthy meals, as part of employee wellness programs.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="skillsadultstrategy" value="18">Ensure adequate state and federal funding for healthy food skills-related education for SNAP/EBT and WIC participants.
			</label>
		</div>
	</div>

	<div class="form-group hidden" id="professionals">
		<label class="control-label">Please choose a <a href ="http://mnfoodcharter.com/the-charter/food-skills/strategies/" target="_blank"> Food Skills </a> - Food Service Professionals strategy:
		</label>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="skillsprofessionalstrategy" value="19">Create ideal professional standards for nutrition and food skills core competencies for foodservice professionals.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="skillsprofessionalstrategy" value="20">Teach knowledge and skills needed by foodservice professionals to continue to service healthy meals.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="skillsprofessionalstrategy" value="21">Improve foodservice professionals' wages.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="skillsprofessionalstrategy" value="22">Increase funding available for schools to obtain necessary facilities upgrades, kitchen equipment or other food-preparation and teaching resources.
			</label>
		</div>
	</div>

	<div class="form-group hidden" id="buy">
		<label class="control-label">Please choose a <a href="http://mnfoodcharter.com/the-charter/food-affordability/strategies/" target="_blank"> Food Affordability</a> - Buying Food strategy:
		</label>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="affordabilitybuystrategy" value="23">Create incentives for Minnesota businesses to pay all employees living wages.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="affordabilitybuystrategy" value="24">Offer incentive programs for consumers, such as 'market bucks' and 'veggie prescription' programs for healthy food purchases at stores and farmers markets.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="affordabilitybuystrategy" value="25">Establish healthy food programs and policies that give institutional food buyers greater purchasing power, so they have more resources to buy healthier food for meals, concessions, vending machines and fundraisers.
			</label>
		</div>
	</div>

	<div class="form-group hidden" id="sell">
		<label class="control-label">Please choose a <a href="http://mnfoodcharter.com/the-charter/food-affordability/strategies/" target="_blank"> Food Affordability</a> - Selling Food strategy:
		</label>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="affordabilitysellstrategy" value="26">	Streamline regulations so more farmers who sell food at farmers markets or elsewhere can accept WIC and SNAP/EBT.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="affordabilitysellstrategy" value="27">Develop a 'healthy food financing' initiative that provides funding, incentives, low-cost financing, and tax breaks for healthy food-related enterprises (such as new food stores offering affordable, healthy options in communities that need them, or regionally-focused food distribution companies).
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="affordabilitysellstrategy" value="28">Develop institutional policies and practices to increase the price of unhealthy food and decrease the price of healthy foods.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="affordabilitysellstrategy" value="29">Create incentives for institutional foodservices, stores, and farmers' markets to purchase or sell affordable foods grown locally, sustainably, or organically.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="affordabilitysellstrategy" value="30">Create incentives for Minnesota farmers to grow affordable, healthy food for nearby institutions.
			</label>
		</div>
	</div>

	<div class="form-group hidden" id="places">
		<label class="control-label">Please choose a <a href="http://mnfoodcharter.com/the-charter/food-availability/strategies/" target="_blank"> Food Availability</a> - Places and Options strategy:
		</label>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="availabilityplacestrategy" value="31">Provide support (such as tax breaks or incentives) to stores, restaurants, and other places that serve and sell food to limit the number of unhealthy options and improve the availability of affordable, healthy foods, including foods familiar to people of many ethnicities.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="availabilityplacestrategy" value="32">Develop policies and incentives that encourage food retailers (such as corner and convenience stores), restaurants, concessions, and vending machines, to offer a greater number of healthy options and reduce the number of less healthy options.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="availabilityplacestrategy" value="33">Establish policies and incentives that limit the availability of unhealthy foods and increase the availability of healthy foods served in schools, childcare centers, group homes, and hospitals.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="availabilityplacestrategy" value="34">Serve a larger and wider variety of healthy items, and substantially reduce or eliminate unhealthy options at institutions.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="availabilityplacestrategy" value="35">Create healthy food guidelines and establish contracts based on these guidelines that determine what types of food vendors and foodservices provide at institutions, organizations, and events that serve the public.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="availabilityplacestrategy" value="36">Manufacture a wider variety of healthy products sold by food industry, including those that use crops raised on nearby family farms.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="availabilityplacestrategy" value="37">Enact staple food ordinances at state, county, or municipal levels to ensure corner stores and other small markets stock a greater variety and amount of healthy foods.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="availabilityplacestrategy" value="38">Offer native communities more nutritious, culturally familiar foods as part of the USDA commodity program.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="availabilityplacestrategy" value="39">Increase the amount of healthy foods, decrease the amount of unhealthy foods, and provide a greater variety of healthy foods that are culturally familiar to customers distributed by food banks and food shelves.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="availabilityplacestrategy" value="40">Increase resources available to hunger relief programs for obtaining and storing healthy foods, including food grown by nearby farmers and foods familiar to customers' cultures.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="availabilityplacestrategy" value="41">Permit hunger relief programs to choose to accept or redistribute food supplied by food banks, in order to meet healthy food guidelines established by foodshelves.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="availabilityplacestrategy" value="42">Educate employers and mothers about state and federal statutes that support break time for nursing and expressing milk in the workplace.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="availabilityplacestrategy" value="43">Launch and sustain employer-supported, high quality lactation support programs for employees.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="availabilityplacestrategy" value="44">Provide nursing mothers with clean, accessible, safe, comfortable, private spaces to breastfeed their children or pump breast milk.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="availabilityplacestrategy" value="45">Sell foods raised and harvested by tribal members (including traditional foods) and foods grown at nearby family farms at farmers' markets located in or near tribal communities.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="availabilityplacestrategy" value="46">Offer affordably priced native products, such as wild rice, bison, and other traditional  foods, at tribally owned facilities that sell and serve food including casinos, meals programs, and stores.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="availabilityplacestrategy" value="47">Strengthen community food assets, including community gardens, seed banks, community kitchens, and community-supported agriculture farms.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="availabilityplacestrategy" value="48">Provide a  wider variety of food sources in communities with few options for healthy food, such as farmers' markets, mobile markets, or community-supported agriculture delivery sites.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="availabilityplacestrategy" value="49">Change zoning  policies to encourage more small-scale production in communities.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="availabilityplacestrategy" value="50">Distribute unused crops grown by Minnesota farmers for processing into other products or sell surplus produce to buyers through programs that target both institutions and individuals.
			</label>
		</div>
	</div>

	<div class="form-group hidden" id="climate">
		<label class="control-label">Please choose a <a href="http://mnfoodcharter.com/the-charter/food-availability/strategies/" target="_blank"> Food Availability</a> - Climate and Environment strategy:
		</label>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="availabilityclimatestrategy" value="51">Increase support for research to  understand the source, transmission, prevention, and treatment of tickborne diseases, and their effect on people who hunt, fish, forage, garden, and gather wild food.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="availabilityclimatestrategy" value="52">Increase capacity of farmers to use season extension, season moderation, and food crop preservation technologies (such as high tunnels or community root  cellars) to grow, preserve, and store healthy food, including financial and  informational resources.
			</label>
		</div>
	</div>

	<div class="form-group hidden" id="accessibility">
		<label class="control-label">Please choose a <a href="http://mnfoodcharter.com/the-charter/food-accessibility/strategies/" target="_blank"> Food Accessibility</a> - Transportation strategy:
		</label>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="accessibilitytransportationstrategy" value="53">	Include healthy food access as an important component of local governments' overall infrastructure and transportation planning.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="accessibilitytransportationstrategy" value="54">Install and maintain sidewalks, metered crosswalks, and bike paths on routes that provide access to stores, hunger relief programs, farmers' markets, community gardens, and other food sources.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="accessibilitytransportationstrategy" value="55">Put bus routes near community food sources and coordinate bus schedules with those sources' open hours.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="accessibilitytransportationstrategy" value="56">Ensure food stores and farmers markets are located in places easily reached by bus, bike, or foot.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="accessibilitytransportationstrategy" value="57">Create volunteer carpool networks for people who need rides to healthy food sources near where they live.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="accessibilitytransportationstrategy" value="58">Deliver healthy food grown at nearby farms to neighborhood drop-off sites.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="accessibilitytransportationstrategy" value="59">Establish affordable food-delivery services that bring food from local stores and farmers' markets to seniors, individuals with mobility issues, and people without transportation.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="accessibilitytransportationstrategy" value="60">Ensure ongoing, adequate support for existing food-delivery options, such as Meals on Wheels and free or reduced cost delivery services.
			</label>
		</div>
	</div>

	<div class="form-group hidden" id="agriculture">
		<label class="control-label">Please choose a <a href="http://mnfoodcharter.com/the-charter/food-infrastructure/strategies/" target="_blank"> Food Infrastructure</a> - Agriculture and Food Research, Technologies, and Practices strategy:
		</label>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructureagriculturestrategy" value="61">	Increase public funding for agricultural research and development at higher education institutions and Extension (including breeding plants for key food and feed crops for Minnesota markets, developing new cropping systems and related technologies, improving sustainable agricultural practices, and understanding the effect of existing practices on human, animal, and environmental health).
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructureagriculturestrategy" value="62">Ensure adequate resources for public / private partnerships that support pollinator health.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructureagriculturestrategy" value="63">Increase investment in  systems for season extension, season moderation, food preservation systems and technologies, including financing and grants for growers.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructureagriculturestrategy" value="64">Encourage farmers to use farming practices and technologies that protect the health of people, animals, soil, air, and water.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructureagriculturestrategy" value="65">Create policies, technologies, and incentives that reduce food waste or transform it into compost or energy.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructureagriculturestrategy" value="66">Provide resources, support, and incentives for farmers who want to use food production methods, such as sustainable and  organic practices, to increase their customer base.
			</label>
		</div>
	</div>

	<div class="form-group hidden" id="physical">
		<label class="control-label">Please choose a <a href="http://mnfoodcharter.com/the-charter/food-infrastructure/strategies/" target="_blank"> Food Infrastructure</a> - Physical and Financial Infrastructure strategy associated with this project:
		</label>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructurephysicalstrategy" value="67">Establish viable, robust mechanisms for healthy food and farm-related enterprise development, such as angel investor tax credits, start-up funding aggregated from public and private sources, as well as public investment in research and development and technical assistance for business planning.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructurephysicalstrategy" value="68">Promote the development of cooperatively owned businesses related to healthy food and farms.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructurephysicalstrategy" value="69">Establish enterprises that can provide healthy food to nearby communities and institutions.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructurephysicalstrategy" value="70">Create tribally controlled, small incubator farms with shared equipment and water access.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructurephysicalstrategy" value="71">Secure resources for tribal nations to purchase equipment and develop businesses that support harvesting wild rice; catching, gathering, and preserving fish, plant foods, and berries; and tapping, processing, and storing maple syrup.
			</label>
		</div>
	</div>

	<div class="form-group hidden" id="local">
		<label class="control-label">Please choose a <a href="http://mnfoodcharter.com/the-charter/food-infrastructure/strategies/" target="_blank"> Food Infrastructure</a> - Local Markets strategy associated with this project:
		</label>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructurelocalstrategy" value="72">Establish annual voluntary food pricing agreements that Minnesota farmers develop together, and participating wholesalers and vendors agree to honor.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructurelocalstrategy" value="73">Create technical assistance and training opportunities for farmers to sell new products and access new markets.
			</label>
		</div>
	</div>

	<div class="form-group hidden" id="farmland">
		<label class="control-label">Please choose a <a href="http://mnfoodcharter.com/the-charter/food-infrastructure/strategies/" target="_blank"> Food Infrastructure</a> - Farmland Access and Preservation strategy associated with this project:
		</label>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructurefarmlandstrategy" value="74">Establish an easy-to-use farm ownership transition program to transfer farm ownership from one family to another.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructurefarmlandstrategy" value="75">Implement farmland-access recommendations developed by organizations that serve farmers. For example, prioritize family farms in local comprehensive plans, building codes, land use and restrictions, taxing structures, and other local policy initiatives.
			</label>
		</div>
	</div>

	<div class="form-group hidden" id="farmer">
		<label class="control-label">Please choose a <a href="http://mnfoodcharter.com/the-charter/food-infrastructure/strategies/" target="_blank"> Food Infrastructure</a> - Farmer Training and Resources strategy associated with this project:
		</label>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructurefarmerstrategy" value="76">Establish affordable statewide liability, specialty crops, and health insurance programs for small farmers.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructurefarmerstrategy" value="77">Create and offer training (classes and written material) in multiple languages, with a focus on basic farm ownership, food production, and farm management skills.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructurefarmerstrategy" value="78">Ensure adequate, ongoing investment in a wide array of farmer-focused technical assistance and training.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructurefarmerstrategy" value="79">Provide comprehensive, culturally appropriate training for small entrepreneurs who sell foods at cultural events, such as powwows, community feasts, and farm-based dinners.
			</label>
		</div>
	</div>

	<div class="form-group hidden" id="labor">
		<label class="control-label">Please choose a <a href="http://mnfoodcharter.com/the-charter/food-infrastructure/strategies/" target="_blank"> Food Infrastructure</a> -  Labor and Pay strategy associated with this project:
		</label>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructurelaborstrategy" value="80">Support research, policies, and programs that address food-infrastructure labor and pay issues, such as support for organizations that provide independent verification of labor and pay conditions in agriculture and food-related enterprises.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructurelaborstrategy" value="81">Share information and conduct training for food and farm-related employers on federal and state labor laws, with accompanying promotion and materials in multiple languages.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructurelaborstrategy" value="82">Disseminate information and conduct training for food and farm-related workers on federal and state labor laws, with accompanying promotion and materials in multiple languages.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructurelaborstrategy" value="83">Improve enforcement, training, and dissemination of federal and state labor laws and workplace and food safety regulations - including promotion and materials in multiple languages.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructurelaborstrategy" value="84">Strengthen whistleblower protections for food and farm-related workers - including legislation and worker organization.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructurelaborstrategy" value="85">Develop comprehensive policy and related resources to ensure adequate housing for workers employed seasonally in agriculturally-related businesses.
			</label>
		</div>
	</div>

	<div class="form-group hidden" id="healthy">
		<label class="control-label">Please choose a <a href="http://mnfoodcharter.com/the-charter/food-infrastructure/strategies/" target="_blank"> Food Infrastructure</a> - Healthy Food and Agriculture  Policy strategy associated with this project:
		</label>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructurehealthystrategy" value="86">Encourage the Statewide Health Improvement Program, state agricultural grant programs, and other state resources to implement Food Charter strategies.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructurehealthystrategy" value="87">Create state-level policies and investments that support and minimize risk for Minnesota farms that grow healthy, costly and/or vulnerable crops, such as fruits and vegetables.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructurehealthystrategy" value="88">Encourage federal agriculture and nutrition policies and priorities to reflect the stated needs and solutions described in the  Minnesota Food Charter.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructurehealthystrategy" value="89">Strengthen relationships between federal agencies and tribal communities to increase access to agency resources that support tribal communities' traditional foods practices.
			</label>
		</div>
	</div>

	<div class="form-group hidden" id="food">
		<label class="control-label">Please choose a <a href="http://mnfoodcharter.com/the-charter/food-infrastructure/strategies/" target="_blank"> Food Infrastructure</a> - Food Labeling, Regulations, and Marketing strategy associated with this project:
		</label>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructurefoodstrategy" value="90">Address consumer food labeling concerns at the federal and state level.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructurefoodstrategy" value="91">Reduce marketing of unhealthy food to children.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructurefoodstrategy" value="92">Streamline food safety and licensing protocols, and provide training for small and emerging businesses (such as growers and processors) on good agricultural practices, food safety, licensing, inspections, and related regulations.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructurefoodstrategy" value="93">Give inspectors flexible tools for the type, size, and risk of food business.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructurefoodstrategy" value="94">Meet sovereign tribal nations' stated needs for food safety education, food protection, and foodborne illness response.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructurefoodstrategy" value="95">Develop interagency workgroups and trainings to ensure clear, consistent enforcement of food safety and inspection codes.
			</label>
		</div>
	</div>

	<div class="form-group hidden" id="influence">
		<label class="control-label">Please choose a <a href="http://mnfoodcharter.com/the-charter/food-infrastructure/strategies/" target="_blank"> Food Infrastructure</a> - Influencing and Decision Making strategy associated with this project:
		</label>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructureinfluencestrategy" value="96">Support food policy councils at local, regional, and state levels.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructureinfluencestrategy" value="97">Invest in development and implementation of effective food systems planning for communities and regions across Minnesota.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructureinfluencestrategy" value="98">Establish councils of traditional foods gatherers to advise tribal communities on food-related needs and issues.
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="infrastructureinfluencestrategy" value="99">Encourage the Minnesota Department of Agriculture to develop long-term plans for Minnesota's agricultural infrastructure.
			</label>
		</div>
	</div>
	<input type="submit" name="contact_submit" value="Submit Survey" class="btn switch-list"> <!-- If button is last in form, it will be a submit button -->
</form>
</div>

<hr>
<script>

	$(document).ready(function() {
		$("input[name=connected]").on("change", function() { //name of originating question
			if($(this).val() == "yes") { //put in value that if checked, will cause script to run
				$("input[name=connectedresult]").closest(".form-group").removeClass("hidden"); //name of input to be shown
			}																	//class name = .form-group
			else {
				$(".connectedresult").addClass("hidden"); //if person changes mind this will remove the above.
			}
		});

		$("input[name=categories]").on("change",function() {
			var $category = '#'+$(this).val();
			$($category).toggleClass('hidden');	
		});

		$("input[name=skillssubcategory]").on("change",function() {
			var $skillsub = '#'+$(this).val();
			$($skillsub).toggleClass('hidden');	
		});

		$("input[name=affordabilitysubcategory]").on("change",function() {
			var $skillsub = '#'+$(this).val();
			$($skillsub).toggleClass('hidden');	
		});

		$("input[name=availabilitysubcategory]").on("change",function() {
			var $skillsub = '#'+$(this).val();
			$($skillsub).toggleClass('hidden');	
		});

		$("input[name=infrastructuresubcategory]").on("change",function() {
			var $skillsub = '#'+$(this).val();
			$($skillsub).toggleClass('hidden');	
		});
	});

</script>
