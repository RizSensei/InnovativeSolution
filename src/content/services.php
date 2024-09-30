<div class="px-5 sm:px-10 md:px-14 xl:px-20 2xl:px-60 py-10">
    <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="h-full flex flex-col justify-center">
            <h1 class="mt-2 text-6xl text-blue">SERVICES</h1>
            <div
                class="mt-5 border-4 border-solid border-blue border-y-0 border-r-0 px-5 py-5 text-light-black text-sm 2xl:text-base text-justify">
                Our services are tailored to deliver exceptional outcomes that
                align with your unique business objectives and requirements. We
                utilize cutting-edge technology and conduct thorough research to
                ensure that the solutions we provide yield tangible results that
                are aligned with your organization's goals.
            </div>
        </div>
        <div class="hidden md:inline-block">
            <img
                src="/hello/public/images/vector-building.png"
                alt=""
                class="h-full w-full object-cover" />
        </div>
    </div>

    <div
        id="service-container"
        class="mt-10 px-5 xl:px-20 py-10 flex flex-col gap-5 bg-gray-50">
        <script>
            const services = [{
                    name: "Research",
                    description: "Our research services are designed to provide in-depth insights and analysis to inform your business decisions. We conduct comprehensive studies, leveraging the latest methodologies to gather accurate data and uncover key trends. This allows you to stay ahead in your industry and make strategic decisions with confidence.",
                    image: "https://images.pexels.com/photos/1106468/pexels-photo-1106468.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                },
                {
                    name: "Data Solutions",
                    description: "We offer tailored data solutions that help you organize, analyze, and utilize data effectively. From data management and integration to analytics and reporting, our services ensure you can harness the full power of your data to drive better business outcomes and make informed decisions.",
                    image: "https://images.pexels.com/photos/7567535/pexels-photo-7567535.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                },
                {
                    name: "Geographic Information Systems (GIS)",
                    description: "Our GIS services provide advanced mapping and spatial analysis to support location-based decision-making. By utilizing cutting-edge tools, we help you visualize and analyze geographic data, enabling you to optimize operations, plan strategically, and gain new insights from spatial trends.",
                    image: "https://images.pexels.com/photos/7412068/pexels-photo-7412068.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                },
                {
                    name: "Software Development",
                    description: "Our software development team creates custom applications designed to meet your specific business needs. We build scalable, efficient, and user-friendly software solutions using the latest technologies, ensuring that your digital infrastructure enhances productivity and delivers a competitive edge.",
                    image: "https://images.pexels.com/photos/1181243/pexels-photo-1181243.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                },
                {
                    name: "System Automation",
                    description: "We specialize in automating complex business processes to improve efficiency and reduce manual tasks. Our system automation solutions streamline workflows, enhance accuracy, and increase operational speed, allowing your team to focus on more strategic activities while improving overall business performance.",
                    image: "https://images.pexels.com/photos/2881229/pexels-photo-2881229.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                },
            ];
            const serviceContent = services
                .map((service, i) => {
                    return `
                 <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 md:gap-10">
                <div data-aos="fade-left" data-aos-duration="750" class="${
                  i % 2 == 0 ? "lg:order-1" : "lg:order-2"
                } h-[400px] w-full rounded-lg bg-light-black/25 overflow-hidden">
                    <img src="${
                      service.image
                    }" alt="" class="h-full w-full object-cover">
                </div>
                <div data-aos="fade-right" data-aos-duration="750" class="${
                  i % 2 == 0 ? "lg:order-2" : "lg:order-1"
                } h-full w-full flex flex-col justify-center gap-2">
                    <h2 class="text-blue font-medium">${service.name}</h2>
                    <p class="text-light-black font-medium text-sm 2xl:text-base line-clamp-4 text-justify">
                       ${service.description}
                    </p>
                    <a href="/hello/src/service-description.php" class="w-max cursor-pointer no-underline border-none bg-blue rounded-lg text-white px-4 py-2 text-sm">Learn More</a>
                </div>
            </div>
                `;
                })
                .join("");
            document.getElementById("service-container").innerHTML =
                serviceContent;

            AOS.init({
                once: true,
            });
        </script>
    </div>
</div>