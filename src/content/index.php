        <!-- banner carousel  -->
        <div id="banner-container">
          <div class="owl-carousel owl-theme z-10">
            <div class="relative aspect-video w-full lg:h-[500px] 2xl:h-[700px]">
              <img
                src="https://images.pexels.com/photos/6646880/pexels-photo-6646880.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                alt=""
                class="h-full w-full object-cover" />
            </div>
          </div>
        </div>

        <!-- projects department  -->
        <div
          class="px-5 sm:px-10 xl:px-20 py-10"
          data-aos="fade-zoom-in"
          data-aos-easing="ease-in-back"
          data-aos-delay="200"
          data-aos-offset="0">
          <div>
            <h1 class="font-semibold text-2xl text-blue">Our Projects</h1>
          </div>

          <div
            id="projects-grid"
            class="mt-5 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5">
            <script>
              const projects = [
                "https://images.pexels.com/photos/27907084/pexels-photo-27907084/free-photo-of-a-construction-site-with-scaffolding-and-a-building.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                "https://images.pexels.com/photos/9396159/pexels-photo-9396159.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                "https://images.pexels.com/photos/7441094/pexels-photo-7441094.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                "https://images.pexels.com/photos/3415148/pexels-photo-3415148.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                "https://images.pexels.com/photos/3321796/pexels-photo-3321796.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
              ]
              document.getElementById("projects-grid").innerHTML += projects
                .slice(0, 5)
                .map(
                  (project, i) => `
                             <a href="/hello/src/project-description.php"
                      class="h-64 2xl:h-96 w-full bg-light-black bg-opacity-10 rounded-md"
                    >
                    <img src=${project} alt="" class="h-full w-full object-cover"/>
                    </div>
                            `
                )
                .join("");
            </script>
          </div>
        </div>

        <!-- sectors department  -->
        <div
          class="px-5 sm:px-10 xl:px-20 py-10"
          data-aos="fade-zoom-in"
          data-aos-easing="ease-in-back"
          data-aos-delay="200"
          data-aos-offset="0">
          <div>
            <h1 class="font-semibold text-2xl text-blue">Our Sectors</h1>
          </div>
          <div
            id="sectors-grid"
            class="mt-5 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5">
            <script>
              const sectors = [{
                  title: "Climate Change"
                },
                {
                  title: "Education"
                },
                {
                  title: "Entrepreneurship"
                },
                {
                  title: "Governance"
                },
                {
                  title: "Human Resource Management"
                },
                {
                  title: "Infrastructure Management"
                },
                {
                  title: "Land Management"
                },
                {
                  title: "Livelihoods"
                },
                {
                  title: "Information Technology"
                },
                {
                  title: "Disaster Risk Management"
                },
                {
                  title: "Water and Sanitation"
                },
                {
                  title: "Water Resourse Management"
                },
                {
                  title: "Urban Management"
                },
                {
                  title: "Public Health"
                },
                {
                  title: "Safe Motherhood and New Born"
                },
                {
                  title: "Solid Waste Management"
                },
                {
                  title: "Watershed Management"
                },
              ];
              document.getElementById("sectors-grid").innerHTML += sectors
                .slice(0, 5)
                .map(
                  (sector, i) => `
                             <a href="/hello/src/sector-description.php"
                      class="no-underline py-1 px-5 shadow-md hover:shadow-2xl flex flex-col gap-10 items-center justify-center rounded-md h-60 2xl:h-80 w-full border border-solid border-blue border-opacity-25 overflow-hidden text-center transform ease-in-out duration-150"
                    >
                       <img src="/hello/public/images/sectorsIcon/${sector.title}.png" alt="${sector.title}" class="h-16 2xl:h-24">
                        <h4 class="text-blue font-semibold no-underline">${sector.title}</h4>
                    </a>
                            `
                )
                .join("");
            </script>
          </div>
        </div>

        <!-- services department  -->
        <div class="relative -z-20 overflow-hidden bg-blue">
          <div class="z-20 px-5 sm:px-10 xl:px-20 py-10 xl:py-20">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
              <div class="flex flex-col justify-center">
                <h2 class="text-white m-0">OUR SERVICES</h2>
                <p class="text-justify text-sm font-medium text-white mt-3">
                  Our services are tailored to deliver exceptional outcomes that
                  align with your unique business objectives and requirements.
                  We utilize cutting-edge technology and conduct thorough
                  research to ensure that the solutions we provide yield
                  tangible results that are aligned with your organization's
                  goals.
                </p>
              </div>
              <div id="services-container" class="grid grid-cols-3 gap-3">
                <script>
                  let services = [{
                      icon: "search-Icon",
                      title: "RESEARCH"
                    },
                    {
                      icon: "data-Icon",
                      title: "DATA SOLUTION"
                    },
                    {
                      icon: "gis-Icon",
                      title: "GIS"
                    },
                    {
                      icon: "code-Icon",
                      title: "SOFTWARE DEVELOPMENT"
                    },
                    {
                      icon: "system-Icon",
                      title: "SYSTEM AUTOMATION"
                    },
                  ];

                  const servicesGrid = services
                    .map(
                      (service, i) => `
                      <div
                  class="py-1 px-2 bg-white shadow-md flex flex-col gap-2 items-center justify-center rounded-md aspect-video"
                >
                  <div id="${service.icon}" class="text-blue text-2xl 2xl:text-3xl font-semibold text-center"></div>
                  <h4 class="text-blue text-sm 2xl:text-base text-center font-semibold uppercase m-0">${service.title}</h5>
                </div>
                    `
                    )
                    .join("");
                  document.getElementById("services-container").innerHTML =
                    servicesGrid;
                </script>
              </div>
            </div>
          </div>
          <div class="-z-10 absolute bottom-0 w-full mix-blend-luminosity">
            <img
              src="/hello/public/images/wave-vector.png"
              alt=""
              class="h-full w-full object-cover" />
          </div>
        </div>


        <!-- news deaprtmnet  -->
        <div class="px-5 sm:px-10 xl:px-20 py-10">
          <h5 class="text-light-black font-medium m-0">News & Updates</h5>
          <h2 class="text-blue font-semibold m-0">
            Keep up with our latest activities
          </h2>
          <div
            id="news-container"
            class="mt-8 mb-5 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-5 gap-5">
            <script>
              const news_list = [
                "https://images.pexels.com/photos/27907084/pexels-photo-27907084/free-photo-of-a-construction-site-with-scaffolding-and-a-building.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                "https://images.pexels.com/photos/9396159/pexels-photo-9396159.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                "https://images.pexels.com/photos/7441094/pexels-photo-7441094.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                "https://images.pexels.com/photos/3415148/pexels-photo-3415148.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                "https://images.pexels.com/photos/3321796/pexels-photo-3321796.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
              ]
              const newsLists = news_list
                .map(
                  (news, i) => `
                       <div class="flex flex-col">
                      <div class="rounded-sm overflow-hidden border-b-2 border-solid border-blue border-x-0 border-t-0 bg-blue/10" style="aspect-ratio: 1/1;">
                        <img src="${news}" alt="" class="h-full w-full object-cover"/>
                      </div>
                      <a href="/hello/src/news-description.php" class="mt-3 no-underline hover:underline text-light-black font-semibold text-sm 2xl:text-base line-clamp-2">Kickoff Meeting for IMIS implementation in Birendranagar Municipality</a>
                  </div>
                    `
                )
                .join("");
              document.getElementById("news-container").innerHTML = newsLists;
            </script>
          </div>
          <a href="/hello/src/news.html" class="text-blue">View all news</a>
        </div>

        <script>
          AOS.init({
            once: true,
          });
        </script>