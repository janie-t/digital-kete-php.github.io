<?php
  $title = 'Janie Tito | Technical Blog';
  $header = '
    <div class="row">
      <div class="twelve columns">
        <img class="headerImage" src="images/tui.jpg" alt="Tui bird feeding" />
      </div>
    </div>';

  $content = '
    <div class="row">
      <div class="twelve columns welcome">
        <h1>Learning Code</h1>
        <h2>This blogs discusses some of the web development tools and techniques I learned during Enspiral Dev Academy 2016/2017</h2>
      </div>
    </div>

    <div class="row">
      <div class="twelve columns blog_nav">
        <a class="button button-primary" href="#one">HTML, CSS, DOM - Part 1</a>
        <a class="button button-primary" href="#two">Part 2</a>
        <a class="button button-primary" href="#three">Responsive Design</a>
        <a class="button button-primary" href="#four">Wireframes</a>
        <a class="button button-primary" href="#five">Javascript Basics</a>
        <a class="button button-primary" href="#six">Problem Solving</a>
        <a class="button button-primary" href="#seven">Javascript Language</a>
        <a class="button button-primary" href="#eight">Scope</a>
      </div>
      <a name="top"></a>
    </div>

    <div class="row">
      <div class="twelve columns article">
        <a name="one"></a>
        <h2>HTML, CSS, the DOM - Part 1</h2>
        <p>What is HTML/CSS/the DOM? An analogy: My kids were colouring in a blank poster today, with just the outlines of some animal pictures.  HTML is like that basic outline. It provides the content of text, images, video etc, but nothing else.  CSS is like the animals being coloured in different hues, and also given spots or stripes. CSS provides the styling such as colour and font.  The DOM is the structure of the poster. It is a way of interacting with the HTML and CSS and provides a familiar structure that helps us to find familiarity in every website. The DOM is also a way of interacting with, and editing the website, without using a text editor. There are developer tools provided in the browser and you can inspect specific elements to see their properties.</p>
        <a href="#top" class="top">TOP</a>
      </div>

      <div class="twelve columns article">
        <a name="two"></a>
        <h2>HTML, CSS, the DOM - Part 2</h2>
        <p>Grid based design is where the html layout is structured using rows and columns.  The common number of columns is 12 to allow for a range of layout designs. This is a flexible way of allowing different layouts while staying with the boxify concept.</p>
        <p>Responsive web design is a big deal these days because there are so many different kinds of devices being used.  From large screen desktops, to small mobile phones - the same website needs to be able to be usable and readable on every device in the world! So being responsive is kinda important!</p>
        <p>Semantic structure is when we start looking at the hierarchy of elements such as text on a page. Good practice is giving larger headings at the top of a page, an h1 tag, and this tells the browser that the heading is important and will be semantically placed at the top.  Then h2 under that, and h3 under that, etc.</p>
        <a href="#top" class="top">TOP</a>
      </div>

      <div class="twelve columns article">
        <a name="three"></a>
        <h2>Responsive, mobile-first sites</h2>
        <p>A responsive website is one that will automatically adjust itself to fit your device. It will resize text, headings, images and other elements, change the layout and any other changes that help the person (you) read the website.  It\'s important because of the huge range of devices used these days. Most people would use a mobile device ie. a phone, to browse websites and so any business or organisation wants to make sure the user has a good experience with their site.</p>
        <p>Mobile first design is where the layout is determined based on the dimensions of a mobile phone initially, and then changed to fit desktop browsers later on.  If you do desktop design first, its more likely to be a website that needs a bit of computer processing power and if opened on a phone, may be clunky and slow, or not work at all.  If the design is mobile-first, then its likely to work well on phones, and also desktops.</p>
        <p>Frameworks are like libraries. They have a bundle of code that you can borrow (forever), so that web developers don\'t need to keep reinventing the wheel.  Some pros are that it saves time and you can design a website that is industry standard and works well for most users and browsers. The cons are that they can be complicated, and take up more processing power to utilise than a simple website. You also have to stick to the framework semantics which you may not be used to.</p>
        <p>A wireframe is a sketch or outline of what the proposed website design will look like. It is usually just boxes or frames for where the content will go - no writing or pictures or colours yet.  It is used to get an idea of the balance on the screen mainly, and to see if elements fit on the page nicely.</p>
        <a href="#top" class="top">TOP</a>
      </div>

      <div class="twelve columns article">
        <a name="four"></a>
        <h2>Wireframe images</h2>
        <p>Here are some (rough) examples of wireframes I did for this website.</p>
        <figure>
         <img src="images/wireframe-index-page-desktop.jpg" alt="wireframe">
         <figcaption>Index page - desktop version</figcaption>
        </figure>
        <figure>
          <img src="images/wireframe-index-page-mobile.jpg" alt="wireframe">
          <figcaption>Index page - mobile version</figcaption>
        </figure>
        <figure>
          <img src="images/wireframe-blog-page-mobile.jpg" alt="wireframe">
          <figcaption>Blog page - mobile version</figcaption>
        </figure>
        <figure>
          <img src="images/wireframe-blog-page-desktop.jpg" alt="wireframe">
          <figcaption>Blog page - desktop version</figcaption>
        </figure>
        <a href="#top" class="top">TOP</a>
      </div>

      <div class="twelve columns article">
        <a name="five"></a>
        <h2>Javascript basics</h2>
        <p>How does Javascript compare to HTML and CSS? If the webpage was a house, HTML is the brick and mortar. CSS is the paint and the style of curtains. And Javascript, is the automatic door opener, the dimmable lights and the temperature controlled wine cellar.  It makes it all so much more interactive and...cool.</p>
        <p>Control flow and loops is the way in which JS sets out instructions or steps.  It is in order. For example, making a cup of tea. You could first turn on the jug. Then you have to keep checking if the jug is boiled (loop) until the right condition is met, which is hot water. At which point, and not before, you could then pour water into your mug.</p>
        <p>Data in arrays is accessed by calling the data\'s place in the list, ie. [0], [1], [2] etc. A piece of data in objects however, needs to be found with its unique name ie. {name: "Bob"}.</p>
        <p>Functions are a bunch of instructions put together in a tidy wee box and given a name. We can then use the function name later on, and avoid having to type out the same instructions over and over. Its a time saver.</p>
        <a href="#top" class="top">TOP</a>
      </div>

      <div class="twelve columns article">
        <a name="six"></a>
        <h2>Problem solving</h2>
        <p>Solving problems in code can be very frustrating. It can be as simple as a missing coma, and it feels terrible because it may have taken you half an hour to find that error.  It\'s been really important to find efficient ways of debugging code and there are many tools and techniques to help developers when we are stuck. Here are a few:

        <p><b><i>Pseudocode</i></b> is really handy but very hard to spell! It made the activities much easier to complete, in fact without the guidance of pseudocode I doubt I would have been able to finish a lot of the activities.
        </p>
        <p><b><i>Trying Something</i></b> is what I do all day. I just jump in start typing. I\'ve found it not terribly succesful though and probably wastes a lot of my time. Will not be doing as much of it.</p>
        <p><b><i>Rubber Ducky</i></b> - as my dog knows, I am a fan. Its just so good to clarify your mind. Looking at a bunch of code on the screen and trying to see issues is hard. Much better to look away and talk it out. Or go to Slack and type it out with your friends. Who are more communicative and helpful than the dog.</p>
        <p><b><i>Reading error messages</i></b> this is something that is invaluable - these can be seen both in the console log and the terminal window, and both are really great clues as to where the problem lies.</p>
        <p><b><i>Googling</i></b> is an easy thing to do, but not necessarily the best method. However, online documents for the technology are very important as reference tools, especially MDN docs.</p>
        <p><b><i>Asking peers for help</i></b> alllll day, I love asking for help. I have such clever people in my cohort that I would be silly not to.</p>

        <p>Now lets look at some useful Array Methods</p>
        <p><b><i>.map()</i></b> is a javascript method which is applied to an array or list. map() uses the nominated function and applies that function to each element in the array, in order. It then collects the results of the function being applied on each element, in a new array.  An example of this may be a function that multiplies each number in an array by itself. If the initial array was [1,3,6] then the map() uses the multiplication function to create a new array [1, 9,36].  The original array is still there; [1,3,6].
        </p>
        <p><b><i>.filter()</i></b> is a method that also creates a new array after applying a function to an existing array. In the new array it only includes elements from the first array that return \'true\' to the function. For example an array of names [\'Bob\', \'Sarah\', \'John\', \'Sue\'] has a function applied to it that finds people born before a certain date. The .filter() will create a second array like [\'Bob\', \'Sue\'] because they were born before the specified date in the function. Once again, the first array stays unchanged.</p>
        <p><b><i>.reduce()</i></b> is a method that will apply a function to an array and return a summarised version of the array. There are four parameters, previousValue, currentValue, currentIndex and array. Depending on what those parameters are, will determine how the initial array is summarised. Numbers can be added together. Strings can be collated into one sentence. For example an array with substrings such as [[1,2],[3,4],[5,6]], using .reduce() with appropriate parameters, can return [1,2,3,4,5,6].  Alternatively an array of [1,2,3,4,5] can be reduced using a Sum function and return [15]. A variable with several elements of say; word: "This", nextword: "has", thirdWord: "been", lastWord: "reduced" could return a reduced array of [\'This\', \'has\', \'been\', \'reduced\'] </p>
        <p>PHEW! If you made it this far, Thank You for your time!!</p>
        <a href="#top" class="top">TOP</a>
      </div>

      <div class="twelve columns article">
        <a name="seven"></a>
        <h2>Javascript Language</h2>
        <p><b>Here are the <i>use cases</i> for the following:</b></p>
        <p><b>Parentheses ( )</b></p>
        <ul>
          <li>Hold the parameters passed to a function (function calls) e.g. function(2,7)</li>
          <li>Group an expression to control the order of operations such as multiplication and addition e.g. (6*4)+(3/5)</li>
          <li>To indicate an empty/anonymous function ie. function()</li>
          <li>To surround conditional statements e.g. if (condition1)
        </ul>
        <p><b>Brackets [ ]</b></p>
        <ul>
          <li>Accessing the properties of an object e.g. console.log(myArray[0])</li>
          <li>Holding elements of an array e.g. var myArray = [0,1,2,3,4]</li>
          <li>Brackets always indicate the contents are an Array.</li>
        </ul>
        <p><b>Braces { }</b></p>
        <ul>
          <li>A sequence of statements inside {} is called a block e.g. var myVar = { property: value, property: value}</li>
          <li>Shows where a function starts and ends e.g. function add () {  the function code here }</li>
          <li>To show where a loop or conditional statement starts and ends e.g. if (condition 1) { result code here }</li>
        </ul>
        <p><b>Single quotes \' \'</b></p>
        <ul>
          <li>Used to contain a string, or inside a string, sometimes in combination with double quotes e.g. \'This is a string\' or "This is called a \'string\'"</li>
          <li>Important to be consistent - if using single quotes, always use single quotes</li>
        </ul>
        <p><b>Double quotes " "</b></p>
        <ul>
          <li>Used for strings also, but can avoid some issues that arise for single quotes such as needing a quote within a quote ie. \'This is called a \'String\'\', as you can\'t put single quotes inside single quotes.</li>
          <li>Use "This is a \'String\'" instead</li>
          <li>Comes down to preference, but whichever you prefer, stick with it and be consistent.</li>
        </ul>
        <a href="#top" class="top">TOP</a>
        </div>

        <div class="twelve columns article">
          <a name="eight"></a>
          <h2>Scope</h2>
          <img src="../images/scope.gif" />
          <p>Scope refers to the way that variables and functions relate to each other in a programme. Variables can be outside of a function, or inside. Depending on where they are in relation to each other, will affect whether or not they can be \'seen\'. For example, a variable created on its own, is a Global variable. It can be seen or used by any other variable or function in the programme. However, a variable can also be created inside a function, and then it becomes a Local variable. It can only be seen or used inside that function, or by another sub-function. Basically the scope is the area within which you have access to variables.</p>
          <a href="#top" class="top">TOP</a>
        </div>
      </div>
  ';

  include 'template.php';
?>
