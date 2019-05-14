?php
   define('DB_SERVER', ' wework.c3ofr9w38qne.us-east-2.rds.amazonaws.com:3306');
   define('DB_USERNAME', 'wework');
   define('DB_PASSWORD', 'wework001');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD);
   $db->close();
extra code

<div class="container">
        <div class="section latest-jobs-ads">
          <div class="section-title tab-manu">
            <h4>Latest Jobs</h4>
             <!-- Nav tabs -->      
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#hot-jobs" data-toggle="tab" aria-expanded="true">Hot Jobs</a></li>
              <li role="presentation" class=""><a href="#recent-jobs" data-toggle="tab" aria-expanded="false">Recent Jobs</a></li>
              <li role="presentation" class=""><a href="#popular-jobs" data-toggle="tab" aria-expanded="false">Popular Jobs</a></li>
            </ul>
          </div>

          <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade active in" id="hot-jobs">
              <div class="job-ad-item">
                <div class="item-info">
                  <div class="item-image-box">
                    <div class="item-image">
                      <a href="job-details.html"><img src="images/job/3.png" alt="Image" class="img-responsive"></a>
                    </div><!-- item-image -->
                  </div>

                  <div class="ad-info">
                    <span><a href="job-details.html" class="title">CTO</a> @ <a href="#">Volja Events &amp; Entertainment</a></span>
                    <div class="ad-meta">
                      <ul>
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                      </ul>
                    </div><!-- ad-meta -->                  
                  </div><!-- ad-info -->
                  <div class="button">
                    <a href="#" class="btn btn-common btn-text">Apply Now</a>
                  </div>
                </div><!-- item-info -->
              </div><!-- ad-item -->  

              <div class="job-ad-item">
                <div class="item-info">
                  <div class="item-image-box">
                    <div class="item-image">
                      <a href="job-details.html"><img src="images/job/1.png" alt="Image" class="img-responsive"></a>
                    </div><!-- item-image -->
                  </div>

                  <div class="ad-info">
                    <span><a href="job-details.html" class="title">Project Manager</a> @ <a href="#">Dominos Pizza</a></span>
                    <div class="ad-meta">
                      <ul>
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                      </ul>
                    </div><!-- ad-meta -->                  
                  </div><!-- ad-info -->
                  <div class="button">
                    <a href="#" class="btn btn-common btn-text">Apply Now</a>
                  </div>
                </div><!-- item-info -->
              </div><!-- ad-item -->  
            
              <div class="job-ad-item">
                <div class="item-info">
                  <div class="item-image-box">
                    <div class="item-image">
                      <a href="job-details.html"><img src="images/job/2.png" alt="Image" class="img-responsive"></a>
                    </div><!-- item-image -->
                  </div>

                  <div class="ad-info">
                    <span><a href="job-details.html" class="title">Graphics Designer</a> @ <a href="#">AOK Security</a></span>
                    <div class="ad-meta">
                      <ul>
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                      </ul>
                    </div><!-- ad-meta -->                  
                  </div><!-- ad-info -->
                  <div class="button">
                    <a href="#" class="btn btn-common btn-text">Apply Now</a>
                  </div>
                </div><!-- item-info -->
              </div><!-- ad-item -->  

              <div class="job-ad-item">
                <div class="item-info">
                  <div class="item-image-box">
                    <div class="item-image">
                      <a href="job-details.html"><img src="images/job/4.png" alt="Image" class="img-responsive"></a>
                    </div><!-- item-image -->
                  </div>

                  <div class="ad-info">
                    <span><a href="job-details.html" class="title">Human Resource Manager</a> @ <a href="#">Dropbox Inc</a></span>
                    <div class="ad-meta">
                      <ul>
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                      </ul>
                    </div><!-- ad-meta -->                  
                  </div><!-- ad-info -->
                  <div class="button">
                    <a href="#" class="btn btn-common btn-text btn-text">Apply Now</a>
                  </div>
                </div><!-- item-info -->
              </div><!-- ad-item -->
            </div><!-- tab-pane -->

            <div role="tabpanel" class="tab-pane fade" id="recent-jobs">
            
              <div class="job-ad-item">
                <div class="item-info">
                  <div class="item-image-box">
                    <div class="item-image">
                      <a href="job-details.html"><img src="images/job/2.png" alt="Image" class="img-responsive"></a>
                    </div><!-- item-image -->
                  </div>

                  <div class="ad-info">
                    <span><a href="job-details.html" class="title">Graphics Designer</a> @ <a href="#">AOK Security</a></span>
                    <div class="ad-meta">
                      <ul>
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                      </ul>
                    </div><!-- ad-meta -->                  
                  </div><!-- ad-info -->
                  <div class="button">
                    <a href="#" class="btn btn-common btn-text btn-text">Apply Now</a>
                  </div>
                </div><!-- item-info -->
              </div><!-- ad-item -->  

              <div class="job-ad-item">
                <div class="item-info">
                  <div class="item-image-box">
                    <div class="item-image">
                      <a href="job-details.html"><img src="images/job/1.png" alt="Image" class="img-responsive"></a>
                    </div><!-- item-image -->
                  </div>

                  <div class="ad-info">
                    <span><a href="job-details.html" class="title">Project Manager</a> @ <a href="#">Dominos Pizza</a></span>
                    <div class="ad-meta">
                      <ul>
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                      </ul>
                    </div><!-- ad-meta -->                  
                  </div><!-- ad-info -->
                  <div class="button">
                    <a href="#" class="btn btn-common btn-text btn-text">Apply Now</a>
                  </div>
                </div><!-- item-info -->
              </div><!-- ad-item -->  

              <div class="job-ad-item">
                <div class="item-info">
                  <div class="item-image-box">
                    <div class="item-image">
                      <a href="job-details.html"><img src="images/job/4.png" alt="Image" class="img-responsive"></a>
                    </div><!-- item-image -->
                  </div>

                  <div class="ad-info">
                    <span><a href="job-details.html" class="title">Human Resource Manager</a> @ <a href="#">Dropbox Inc</a></span>
                    <div class="ad-meta">
                      <ul>
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                      </ul>
                    </div><!-- ad-meta -->                  
                  </div><!-- ad-info -->
                  <div class="button">
                    <a href="#" class="btn btn-common btn-text">Apply Now</a>
                  </div>
                </div><!-- item-info -->
              </div><!-- ad-item -->            
            
              <div class="job-ad-item">
                <div class="item-info">
                  <div class="item-image-box">
                    <div class="item-image">
                      <a href="job-details.html"><img src="images/job/3.png" alt="Image" class="img-responsive"></a>
                    </div><!-- item-image -->
                  </div>

                  <div class="ad-info">
                    <span><a href="job-details.html" class="title">CTO</a> @ <a href="#">Volja Events &amp; Entertainment</a></span>
                    <div class="ad-meta">
                      <ul>
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                      </ul>
                    </div><!-- ad-meta -->                  
                  </div><!-- ad-info -->
                  <div class="button">
                    <a href="#" class="btn btn-common btn-text">Apply Now</a>
                  </div>
                </div><!-- item-info -->
              </div><!-- ad-item -->  
            </div><!-- tab-pane -->

            <div role="tabpanel" class="tab-pane fade" id="popular-jobs">
              <div class="job-ad-item">
                <div class="item-info">
                  <div class="item-image-box">
                    <div class="item-image">
                      <a href="job-details.html"><img src="images/job/1.png" alt="Image" class="img-responsive"></a>
                    </div><!-- item-image -->
                  </div>

                  <div class="ad-info">
                    <span><a href="job-details.html" class="title">Project Manager</a> @ <a href="#">Dominos Pizza</a></span>
                    <div class="ad-meta">
                      <ul>
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                      </ul>
                    </div><!-- ad-meta -->                  
                  </div><!-- ad-info -->
                  <div class="button">
                    <a href="#" class="btn btn-common btn-text">Apply Now</a>
                  </div>
                </div><!-- item-info -->
              </div><!-- ad-item -->  
            
              <div class="job-ad-item">
                <div class="item-info">
                  <div class="item-image-box">
                    <div class="item-image">
                      <a href="job-details.html"><img src="images/job/2.png" alt="Image" class="img-responsive"></a>
                    </div><!-- item-image -->
                  </div>

                  <div class="ad-info">
                    <span><a href="job-details.html" class="title">Graphics Designer</a> @ <a href="#">AOK Security</a></span>
                    <div class="ad-meta">
                      <ul>
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                      </ul>
                    </div><!-- ad-meta -->                  
                  </div><!-- ad-info -->
                  <div class="button">
                    <a href="#" class="btn btn-common btn-text">Apply Now</a>
                  </div>
                </div><!-- item-info -->
              </div><!-- ad-item -->  
            
              <div class="job-ad-item">
                <div class="item-info">
                  <div class="item-image-box">
                    <div class="item-image">
                      <a href="job-details.html"><img src="images/job/3.png" alt="Image" class="img-responsive"></a>
                    </div><!-- item-image -->
                  </div>

                  <div class="ad-info">
                    <span><a href="job-details.html" class="title">CTO</a> @ <a href="#">Volja Events &amp; Entertainment</a></span>
                    <div class="ad-meta">
                      <ul>
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                      </ul>
                    </div><!-- ad-meta -->                  
                  </div><!-- ad-info -->
                  <div class="button">
                    <a href="#" class="btn btn-common btn-text">Apply Now</a>
                  </div>
                </div><!-- item-info -->
              </div><!-- ad-item -->  

              <div class="job-ad-item">
                <div class="item-info">
                  <div class="item-image-box">
                    <div class="item-image">
                      <a href="job-details.html"><img src="images/job/4.png" alt="Image" class="img-responsive"></a>
                    </div><!-- item-image -->
                  </div>

                  <div class="ad-info">
                    <span><a href="job-details.html" class="title">Human Resource Manager</a> @ <a href="#">Dropbox Inc</a></span>
                    <div class="ad-meta">
                      <ul>
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                      </ul>
                    </div><!-- ad-meta -->                  
                  </div><!-- ad-info -->
                  <div class="button">
                    <a href="#" class="btn btn-common btn-text">Apply Now</a>
                  </div>
                </div><!-- item-info -->
              </div><!-- ad-item -->
            </div><!-- tab-pane -->
          </div><!-- tab-content -->
        </div>
      </div>




      --------------


      <div class = "container">
        <div class="panel-group">
          <div class="panel panel-default">
            <div class="panel-body">
              <h2>Posted Jobs</h2>
            <!-- for loop starts here -->
            <br>
            <h4><?php echo "job title here from db" ?></h4>
            <h4><?php echo "job description here from db" ?></h4>
            <h4><?php echo "job category here from db" ?></h4>
            <h4><?php echo "job type here from db" ?></h4>
            <h4><?php echo "location here from db" ?></h4>
            <h4><?php echo "comments here from db" ?></h4>
            <h4><?php echo "credits here from db" ?></h4>
            <br>
            <!-- for loop ends here -->
            </div>
          </div>
        </div>
      </div>

      <div class = "container">
        <div class="panel-group">
          <div class="panel panel-default">
            <div class="panel-body">
              <h2>Accepted Jobs</h2>
            <!-- for loop starts here -->
            <br>
            <h4><?php echo "job title here from db" ?></h4>
            <h4><?php echo "job description here from db" ?></h4>
            <h4><?php echo "job category here from db" ?></h4>
            <h4><?php echo "job type here from db" ?></h4>
            <h4><?php echo "location here from db" ?></h4>
            <h4><?php echo "comments here from db" ?></h4>
            <h4><?php echo "credits here from db" ?></h4>
            <br>
            <!-- for loop ends here -->
            </div>
          </div>
        </div>
      </div>

      -----------------

      $jobtitle[i]=mysqli_query($db,$sql2)->fetch_object()->jobtitle;
  $jobdescription[i]=mysqli_query($db,$sql2)->fetch_object()->jobdescription;
  $jobtype[i]=mysqli_query($db,$sql2)->fetch_object()->jobtype;
  $location[i]=mysqli_query($db,$sql2)->fetch_object()->location;
  $credits[i]=mysqli_query($db,$sql2)->fetch_object()->credits;
  $status[i]=mysqli_query($db,$sql2)->fetch_object()->status;
  $jobcategoryp[i]=mysqli_query($db,$sql2)->fetch_object()->jobcategory;
  $comments[i]=mysqli_query($db,$sql2)->fetch_object()->comments;
}

----------



                  <br>
                  <button class="btn btn-common" onclick="myFunction1()" style="margin-left: 850px; margin-top: 20px; margin-bottom: 30px; ">Apply for this Job Now</button>

