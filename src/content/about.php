<div class="relative px-5 sm:px-10 md:px-14 xl:px-20 2xl:px-32 py-10">
    <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="h-full flex flex-col justify-center">
            <h1 class="text-4xl text-blue">
                Driving Development with Data and IT
            </h1>
            <p
                class="mt-2 text-sm 2xl:text-base text-justify text-light-black">
                Founded in 2007, integrates Social Science Research and
                Information Technology to drive innovation in policies,
                processes, and programs for development challenges.
            </p>
        </div>
        <div class="hidden md:inline-block">
            <img
                src="/hello/public/images/vector-building.png"
                alt=""
                class="h-full w-full object-cover" />
        </div>
    </div>

    <div
        id="stickyAboutNav"
        class="z-50 bg-blue flex justify-center py-5 my-5 md:my-2">
        <ul
            class="about-links-ul list-none flex text-white text-base break-words">
            <li><a href="#about-us">About Us</a></li>
            <li><a href="#sectors">Sectors</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#partners">Partners</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </div>

    <!-- about us department  -->
    <div id="about-us"
        data-aos="fade-zoom-in"
        data-aos-easing="ease-in-back"
        data-aos-delay="200"
        data-aos-offset="0"
        class="mt-10 scroll-mt-[145px] flex flex-col gap-10">
        <div>
            <h1 class="font-semibold text-2xl text-blue">About Us</h1>
            <p
                class="mt-2 text-sm 2xl:text-base text-justify text-light-black">
                Innovative Solution was founded in 2007 with the aim of
                providing innovative solutions to address development challenges
                through mainstreaming the use of Data and Information Technology
                to drive innovation in policies, processes and programs. We
                integrate Social Science Research methods and Information
                Technology to plan, implement and monitor the development
                interventions.
                <br />
                <br />
                We have been supporting all sectors from National and
                International Government to Public and Private Institutions
                working in various development sectors. Our support network
                comprises of distinguished policy makers, academicians and
                intellectuals from diverse backgrounds who play both advisory
                and consulting roles. We are located at Chakupat, closed to
                Patan Dhoka in Lalitpur Metropolitan City.
            </p>
        </div>

        <div>
            <h1 class="font-semibold text-2xl text-blue">Our Footprint</h1>
            <div id="map" class="mt-2 h-[500px] w-full"></div>
        </div>
    </div>

    <!-- sectors department  -->
    <div
        id="sectors"
        class="mt-10 scroll-mt-[145px]"
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
                        title: "Climate Change",
                        image: "Climate Change.png"
                    },
                    {
                        title: "Education",
                        image: "Education.jpg"
                    },
                    {
                        title: "Entrepreneurship",
                        image: "Entrepreneurship.png"
                    },
                    {
                        title: "Governance",
                        image: "Governance.png"
                    },
                    {
                        title: "Human Resource Management",
                        image: "Human Resource Management.png"
                    },
                    {
                        title: "Infrastructure Management",
                        image: "Infrastructure Management.png"
                    },
                    {
                        title: "Land Management",
                        image: "Land Management.png"
                    },
                    {
                        title: "Livelihoods",
                        image: "Livelihoods.png"
                    },
                    {
                        title: "Information Technology",
                        image: "Information Technology.png"
                    },
                    {
                        title: "Disaster Risk Management",
                        image: "Disaster Risk Management.png"
                    },
                    {
                        title: "Water and Sanitation",
                        image: "Water and Sanitation.png"
                    },
                    {
                        title: "Water Resource Management",
                        image: "Water Resourse Management.png"
                    },
                    {
                        title: "Urban Management",
                        image: "Urban Management.png"
                    },
                    {
                        title: "Public Health",
                        image: "Public Health.png"
                    },
                    {
                        title: "Safe Motherhood and New Born",
                        image: "Safe Motherhood and New Born.png"
                    },
                    {
                        title: "Solid Waste Management",
                        image: "Solid Waste Management.png"
                    },
                    {
                        title: "Watershed Management",
                        image: "Watershed Management.png"
                    }
                ];

                document.getElementById("sectors-grid").innerHTML += sectors
                    .map(
                        (sector, i) => `
                       <a href="/hello/src/sector-description.php"
                class="no-underline py-1 px-5 shadow-md hover:shadow-2xl flex flex-col gap-10 items-center justify-center rounded-md h-60 2xl:h-80 w-full border border-solid border-blue border-opacity-25 overflow-hidden text-center transform ease-in-out duration-150"
              >
                 <img src="/hello/public/images/sectorsIcon/${sector.image}" alt="${sector.title}" class="h-16 2xl:h-24">
                  <h4 class="text-blue font-semibold no-underline">${sector.title}</h4>
              </a>
                      `
                    )
                    .join("");
            </script>
        </div>
    </div>

    <!-- projects department  -->
    <div
        id="projects"
        class="mt-10 scroll-mt-[145px]"
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
                    .map(
                        (project, i) => `
                       <div
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

    <!-- partners department  -->
    <div
        id="partners"
        class="mt-10 scroll-mt-[145px]"
        data-aos="fade-zoom-in"
        data-aos-easing="ease-in-back"
        data-aos-delay="200"
        data-aos-offset="0">
        <div>
            <h1 class="font-semibold text-2xl text-blue">Our Partners</h1>
        </div>
        <div
            id="partners-grid"
            class="mt-5 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5">
            <script>
                document.getElementById("partners-grid").innerHTML += [
                        1, 1, 1, 1,
                    ]
                    .map(
                        (sector, i) => `
                       <div
                class="h-32 w-full bg-light-black bg-opacity-10 rounded-md"
              >
              </div>
                      `
                    )
                    .join("");
            </script>
        </div>
    </div>

    <!-- contact department  -->
    <div
        id="contact"
        class="mt-10 scroll-mt-[145px]"
        data-aos="fade-zoom-in"
        data-aos-easing="ease-in-back"
        data-aos-delay="200"
        data-aos-offset="0">
        <div>
            <h1 class="mb-5 font-semibold text-2xl text-blue">Contact Us</h1>
        </div>
        <div
            class="grid md:grid-cols-2 gap-16 my-10 bg-white text-[#333] px-10 md:px-20">
            <div>
                <h1 class="text-3xl font-bold">Let's Talk</h1>
                <p class="text-sm font-medium text-light-black mt-3">
                    Leave us a note and we will get back to you within next 24
                    hrs.
                </p>
                <div class="mt-12 flex flex-col gap-5">
                    <div class="flex items-center gap-2">
                        <div
                            id="locationPin-Icon"
                            class="shrink-0 rounded-full p-1 border border-solid border-light-black/20 h-8 w-8"></div>
                        <p class="break-all text-sm font-medium text-light-back">
                            Chakupat, Ward-10, Lalitpur 44600
                        </p>
                    </div>
                    <div class="flex items-center gap-2">
                        <div
                            id="clock-Icon"
                            class="shrink-0 rounded-full p-1 border border-solid border-light-black/20 h-8 w-8"></div>
                        <p class="break-all text-sm font-medium text-light-back">
                            10:00 am to 5:00 pm
                        </p>
                    </div>
                    <div class="flex items-center gap-2">
                        <div
                            id="regularMail-Icon"
                            class="shrink-0 rounded-full p-1 border border-solid border-light-black/20 h-8 w-8"></div>
                        <p class="break-all text-sm font-medium text-light-back">
                            insol@innovativesolution.com.np
                        </p>
                    </div>
                    <div class="flex items-center gap-2">
                        <div
                            id="call-Icon"
                            class="shrink-0 rounded-full p-1 border border-solid border-light-black/20 h-8 w-8"></div>
                        <p class="break-all text-sm font-medium text-light-back">
                            + 977-(01)5446880
                        </p>
                    </div>
                </div>
            </div>
            <form id="form" action="#" method="" class="ml-auo space-y-4">
                <input
                    id="name"
                    name="name"
                    type="text"
                    placeholder="Full Name"
                    class="form-input"
                    required />
                <input
                    id="email"
                    name="email"
                    type="email"
                    placeholder="Email"
                    class="form-input"
                    required />
                <input
                    id="subject"
                    name="subject"
                    type="text"
                    placeholder="Subject"
                    class="form-input"
                    required />
                <textarea
                    id="message"
                    name="message"
                    placeholder="Message"
                    rows="6"
                    class="form-input"
                    required></textarea>
                <input
                    id="button"
                    type="submit"
                    value="Send Email"
                    class="border-none text-white bg-blue hover:bg-blue/90 font-medium rounded-md text-sm px-4 py-3 w-full" />
            </form>
        </div>
        <div class="h-[500px] w-full rounded-md overflow-hidden">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113025.20121247573!2d85.2007679704452!3d27.71612725092618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19c9c7a3f63d%3A0xeb0b92b8918fdf6d!2sInnovative%20Solution!5e0!3m2!1sen!2snp!4v1725963122273!5m2!1sen!2snp"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                class="w-full h-full object-cover"></iframe>
        </div>
    </div>
</div>


<script>
    AOS.init({
        once: true,
    });
</script>