
const animatedImages = document.querySelectorAll(".rotate");

animatedImages.forEach(function(image) {

    const animatedImageTimeline = new ScrollTimeline({
        scrollOffsets: [
        
            { target: image, edge: "end", threshold: "1"},
            { target: image, edge: window.innerHeight - new CSSUnitValue(500, 'px'), threshold: "1"}
        ],
    });

    image.animate(
        {
            transform: [
                "perspective(1000px) rotateX(90deg)",
                "perspective(1000px) rotateX(0)"
            ],
            opacity:["0","1"]
        },
        {
            duration: 1,
            timeline: animatedImageTimeline,
        }
    )

  });