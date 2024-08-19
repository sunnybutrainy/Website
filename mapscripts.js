$(document).ready(function() {
    $("#Buildings div").hide();
    $("#videohide").hide();
    $("#vid").hide();

    const buildings = {
        ABuilding: { xRange: [62, 65], yRange: [35, 40] },
        BBuilding: { xRange: [44, 47], yRange: [42, 45] },
        CBuilding: { xRange: [28, 31], yRange: [54, 57] },
        DBuilding: { xRange: [47, 50], yRange: [51, 54] },
        EBuilding: { xRange: [61, 62], yRange: [71, 74] },
        FBuilding: { xRange: [79, 80], yRange: [59, 61] },
        GBuilding: { xRange: [72, 74], yRange: [50, 52] },
        HBuilding: { xRange: [83, 85], yRange: [77, 79] },
        KBuilding: { xRange: [10, 13], yRange: [8, 11] },
        SBuilding: { xRange: [49, 51], yRange: [69, 72] },
        TBuilding: { xRange: [61, 62], yRange: [61, 63] },
        FHBuilding: { xRange: [66, 69], yRange: [97, 99] }
    };

    $('.interactivemap').on('mouseenter', function() {
        const rect = this.getBoundingClientRect();
        const width = rect.width;
        const height = rect.height;
        $(this).off('mousemove').on('mousemove', function(e) {
            const xPos = (e.clientX - rect.left) / width * 100;
            const yPos = (e.clientY - rect.top) / height * 100;
            $(this).css('--x', xPos + '%');
            $(this).css('--y', yPos + '%');

            for (const building in buildings) {
                const xRange = buildings[building].xRange;
                const yRange = buildings[building].yRange;
                if (xPos >= xRange[0] && xPos <= xRange[1] && yPos >= yRange[0] && yPos <= yRange[1]) {
                    $(this).css('cursor', 'pointer');
                    break;
                } else {
                    $(this).css('cursor','default');
                }
            }
        });
    });

    $('.interactivemap').on('click', function(e) {
        const rect = this.getBoundingClientRect();
        const width = rect.width;
        const height = rect.height;
        const xPos = (e.clientX - rect.left) / width * 100;
        const yPos = (e.clientY - rect.top) / height * 100;

        let buildingId = null;

        for (const building in buildings) {
            const xRange = buildings[building].xRange;
            const yRange = buildings[building].yRange;
            if (xPos >= xRange[0] && xPos <= xRange[1] && yPos >= yRange[0] && yPos <= yRange[1]) {
                buildingId = `#${building}`;
                break;
            }
        }

        if (buildingId) {
            $(buildingId).show();
            $(".interactivemap").hide();
        }
    });

    $('#Buildings .close').on('click', function(e) {
        $("#Buildings div").hide();
        $(".interactivemap").show();
    });

    $('#videoshow').on('click', function(E){
        $("#videoshow").hide();
        $("#vid").show();
        $("#videohide").show();
        $(".interactivemap").hide();
    })

    $('#videohide').on('click', function(E){
        $("#videohide").hide();
        $("#vid").hide();
        $("#videoshow").show();
        $(".interactivemap").show();
    })
});
