<template>
   <div>

    <div class="header">
		<div class="header-left header-left3">
		
			</div>
	
		<div class="content">
			<div class="single">
				<div class="single-top">
				
					<div class="slider">
						<div class="callbacks_container">
						  <ul class="rslides" id="slider4">
							<li>
							  <img src="images/pwa.jpg" alt="">
							  
							</li>
							
						  </ul>
					  </div>
					</div>
					<h2>Progressive web apps - PWA</h2>
					<p class="para">Progressive Web Apps (PWA) are the next big thing in web development as they bring mobile-app-like experiences to your users without requiring them to install an app from the app store/ play store.

							You still create a web application (HTML, CSS, JavaScript) but this course will teach you how to add features such as camera access, service workers for offline support, push notifications and more. 
						<span>	<br>Requirements
								<br>
								Basic HTML, CSS and JavaScript knowledge is required
								NO experience with JavaScript frameworks is required
								</span> </p>
					<div class="comment-grid-top">
					<h3>4 Comments</h3>
					<div class="comments-top-top">
						<div class="top-comment-left">
							<img  src="images/man.png" alt="">
						</div>
						<div class="top-comment-right">
							<ul>
								<li><span > <a href="#">AJ Steve</a></span></li>
								<li><span>/ 8 minutes ago</span></li>
								
							</ul>
							<p>Amazing methodology</p>
						</div>
						<div class="clear"> </div>
						<label> </label>
					</div>
					<div class="comments-top-top top-comment">
						<div class="top-comment-left left-single">
							<img  src="images/man.png" alt="">
						</div>
						<div class="top-comment-right right-single">
							<ul>
								<li><span ><a href="#">Henry Moby</a></span></li>
								<li><span >/ 47 minutes ago</span></li>
								
							</ul>
							<p>It's a totally new way of development</p>
						</div>
						<div class="clear"> </div>
						<label> </label>
					</div>
					<div class="comments-top-top top-com">
						<div class="top-comment-left left-single1">
							<img  src="images/woman.png" alt="">
						</div>
						<div class="top-comment-right  right-single1">
							<ul>
								<li><span > <a href="#">Ellah Zizi</a></span></li>
								<li><span >/ 1 hour ago</span></li>
								
							</ul>
							<p>Nice!!</p>
						</div>
						<div class="clear"> </div>
						<label class="arrow-in"> </label>
					</div>
					
					
					<div class="comments-top-top ">
						<div class="top-comment-left ">
							<img  src="images/man.png" alt="">
						</div>
						<div class="top-comment-right ">
							<ul>
								<li><span > <a href="#">Daisy moore</a></span></li>
								<li><span >/ 5 minutes ago</span></li>
								
							</ul>
							<p>Can i get a link to the docs?</p>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<div class="top-single">
				<h3>Leave a Comment</h3>
				
				<div class="grid-single-in">
					<a class='send' href="#greeting-modal">OK</a>
				</div>
				<div class="clear"> </div>
			</div>
				</div>
				<div class="single-in">
					<div class="info">
					<h3>Post Info</h3>
						<ul class="likes">
							<li><a href="http://henrymoby.tech/"><i > </i>Henry Moby</a></li>
							<li><span><i class="like"> </i>138 Likes</span></li>
							<li><span><i class="dec"> </i>01 April, 2020</span></li>
							<li><a href="#"><i class="comment"> </i>4 Comments</a></li>

						</ul>
					</div>
					<div class="tags">
					<h3>Tags</h3>
						<ul class="tag">
							<li><a href="#">web design</a></li>
							<li><a href="#">pwa</a></li>
							<li><a href="#">development</a></li>
							<li><a href="#">php</a></li>
							<li><a href="#">service worker</a></li>
							<li><a href="#">Js</a></li>
						</ul>
					</div>
					
					<div class="archive">
					<h3>Archives</h3>
						<ul class="archive-grid">
							<li><a href="#">March 2020 (22)</a></li>
							<li><a href="#">January 2020 (11)</a></li>
							<li><a href="#">December 2019 (24)</a></li>
							<li><a href="#">November 2019 (7)</a></li>
							<li><a href="#">September 2019 (2)</a></li>
							

						</ul>
					</div>
				</div>
				<div class="clear"> </div>
			</div>
        </div>



        <div id="app">
            <!-- Modal container -->
            <div 
              class="modal-container" 
              id="greeting-modal">
          
              <!-- Modal  -->
              <div class="modal">
                <div class="top-single">
                    <h3>Leave a Comment</h3>
                    <div class="grid-single">
                        <div class="your-single">
                            <i> </i>
                            <input type="text" value="Name" required onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Name';}">								
                            <div class="clear"> </div>
                        </div>
                        <div class="your-single">
                            <i class="email"> </i>
                            <input type="text" value="E-mail" required onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'E-mail';}">								
                            <div class="clear"> </div>
                        </div>					
                    </div>
                    <div class="grid-single-in">
                        <textarea cols="77" rows="5" value=" " required onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
                        <input type="submit" value="SENT MESSAGE">
                    </div>
                    <div class="clear"> </div>
                </div>
              </div>
          
              <!-- Background, click to close -->
              <a href="#" class="modal-bg"></a>
            </div>
          </div>
     



		<div class="clear"> </div>
				<p class="footer-class-in">Copyright © 2020  by
					  <a href="http://henrymoby.tech/" target="_blank">henrymoby</a> </p>

	</div>


    
   </div>
</template>


<style scoped>

body {
  font-family: Lato;
}

* {
  box-sizing: border-box;
}

/* Greeting Modal Container */
#greeting-modal {
  visibility: hidden;
  opacity: 0;
  transition: all .5s cubic-bezier(0.075, 0.82, 0.165, 1);
}

/* Greeting Modal Container - when open */
#greeting-modal:target {
  visibility: visible;
  opacity: 1;
}

/* Greeting Modal */
#greeting-modal .modal {
  opacity: 0;
  transform: translateY(-1rem);
  transition: all .3s cubic-bezier(0.075, 0.82, 0.165, 1);
  transition-delay: .2s;
}

/* Greeting Modal - when open */
#greeting-modal:target .modal {
transform: translateY(0);
opacity: 1;
}

/* Modal Container Styles */
.modal-container {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  display: flex;
  justify-content: center;
  align-items: center;
}

/* Modal Background Styles */
.modal-bg {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, .2);
}

/* Modal Body Styles */
.modal {
  z-index: 1;
  background-color: white;
  width: 80%;
  max-width: 500px;
  padding: 1rem;
  border-radius: 8px;
}

.send{
    width: 100%;
    font-size: 1.1em;
    background: #1ab5b3;
    padding: .2em 1em;
    text-align: center;
    color: #fff;
    border: none;
    outline: 0;
    margin: 0 auto;
    -webkit-appearance: none;
    font-weight: 700;
    transition: .5s all;
    -webkit-transition: .5s all;
    -o-transition: .5s all;
    -ms-transition: .5s all;
    -moz-transition: .5s all;
    cursor: pointer;
}
</style>


<script>
    export default {
    
      data: () => ({
        
      

      }),

      methods: {
     
        myBtn(){
           // modal.style.display = "block";
        }

      }
    }
  </script>