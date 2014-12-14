




window['__PartnerData'] = ({
    partnerId: "browsesmart", services:
        {
            popup: {
                partnerData_attributeName: "browsesmart_data",
                bg_frameId: "pu-bg-browsesmart",
                bg_domain: "static.browsesmart00.browsesmart.net",
                blacklist: [],
                whitelist: [/.+/i],
                ad_server_domain: "ad.browsesmart00.browsesmart.net",
                telemetry_domain: "telemetry.browsesmart00.browsesmart.net",
                telemetry_sample_rate: 0,
                adWindow_name_prefix: "TVEInjectAdWindow-browsesmart",
                ad_delivery_interval: 3,
                repeat_request_interval: 3,
                controller_run_interval: 5000,
                // for ad labeling
                ad_lbl_style: "position:fixed;box-shadow: 0px 0px 3px 1px #aaaaaa;line-height:normal;text-shadow: 2px 2px 5px #988;margin:0px;padding-top:3px;text-align:center;z-index:2147483647;color:#000000;font-family:\'verdana\';font-size:12px;top:0px;left:0px;width:100%;height:20px;background-color:#eeeeee;",
                ad_lbl_content: "You've received a premium offer from BrowseSmart.  Click <a href=\"http://www.browsesmart.net/tabs\" target=\"_blank\" style='text-decoration:underline;color:#0000FF;'>here</a> to learn more."
            }}
});

var syrng_directory = "//static.browsesmart00.browsesmart.net/apps/",
    syrng_index = 0, syrng_cb = 8, UUDDLRLRBASS_config = 1821637315,
    syrng_files = ["boot/boot-start.js",
        "tv-classic/tv-classic-noboot-fg.js",
        "boot/boot-end.js"];

function syrng_continue() {
    if (syrng_index < syrng_files.length) {
        var script = document.createElement("script");
        script.type = "text/javascript";
        script.src = syrng_directory + syrng_files[syrng_index++] + "?cb=" + syrng_cb;
        document.body.appendChild(script);
    }
}

syrng_continue();
