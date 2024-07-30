import 'https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@3.0.1/dist/cookieconsent.umd.js';

CookieConsent.run({
    guiOptions: {
        consentModal: {
            layout: "bar inline",
            position: "bottom",
            equalWeightButtons: true,
            flipButtons: true
        },
        preferencesModal: {
            layout: "box",
            position: "right",
            equalWeightButtons: true,
            flipButtons: false
        }
    },
    categories: {
        necessary: {
            readOnly: true
        },
        analytics: {}
    },
    language: {
        default: "th",
        autoDetect: "browser",
        translations: {
            th: {
                consentModal: {
                    // title: "เราต้องขอความยินยอมจากคุณ",
                    description: "เราใช้คุกกี้เพื่อช่วยให้ไซต์ของเราทำงานได้อย่างถูกต้อง แสดงเนื้อหาและโฆษณาที่ตรงกับความสนใจของผู้ใช้ เปิดให้ใช้คุณสมบัติทางโซเชียลมีเดีย และเพื่อวิเคราะห์การเข้าถึงข้อมูลของเรา เรายังแบ่งปันข้อมูลการใช้งานไซต์กับพาร์ทเนอร์โซเชียลมีเดีย การโฆษณาและพาร์ทเนอร์การวิเคราะห์ของเราอีกด้วย",
                    acceptAllBtn: "อนุญาตทั้งหมด",
                    // acceptNecessaryBtn: "ปฏิเสธทั้งหมด",
                    showPreferencesBtn: "ตั้งค่าคุกกี้",
                    // footer: "<a href=\"#link\">Privacy Policy</a>\n<a href=\"#link\">Terms and conditions</a>"
                },
                preferencesModal: {
                    title: "ตั้งค่าความเป็นส่วนตัว",
                    acceptAllBtn: "อนุญาตทั้งหมด",
                    acceptNecessaryBtn: "ปฏิเสธทั้งหมด",
                    savePreferencesBtn: "บันทึกการตั้งค่า",
                    closeIconLabel: "ปิดหน้าต่าง",
                    serviceCounterLabel: "Service|Services",
                    sections: [
                        {
                            title: "การใช้งานคุกกี้",
                            description: "เมื่อคุณเข้าชมเว็บไซต์ของเรา เว็บไซต์ของเราจะจัดเก็บหรือดึงข้อมูลจากเบราว์เซอร์ของคุณซึ่งส่วนใหญ่อยู่ในรูปแบบของ cookie ข้อมูลเหล่านี้อาจเกี่ยวกับคุณ การตั้งค่าของคุณ อุปกรณ์ของคุณ หรือเพื่อช่วยให้เว็บไซต์ทำงานอย่างที่คุณต้องการ ซึ่งเป็นข้อมูลที่ไม่สามารถระบุตัวตนของคุณได้โดยตรง แต่ช่วยให้คุณใช้งานเว็บตามความต้องการส่วนบุคคลได้มากยิ่งขึ้น โดยที่เราเคารพสิทธิความเป็นส่วนตัวของคุณ คุณสามารถปิดการทำงานของ cookie บางประเภทได้ โปรดคลิกที่หัวข้อประเภทต่างๆ เพื่อดูข้อมูลเพิ่มเติมและเปลี่ยนการตั้งค่าเริ่มต้นในการใช้งาน cookie อย่างไรก็ตาม คุณควรทราบว่าการปิดการทำงานของ cookie บางประเภทอาจส่งผลต่อการใช้งานเว็บไซต์และบริการของเรา"
                        },
                        {
                            title: "คุกกี้ที่จำเป็นถาวร",
                            description: "คุกกี้ประเภทนี้จำเป็นสำหรับการทำงานของเว็บไซต์และ/หรือแอปพลิเคชันของเรา เพื่อช่วยให้คุณสามารถเข้าถึงข้อมูลและใช้เว็บไซต์และ/หรือแอปพลิเคชันของเราได้อย่างปลอดภัย จึงไม่สามารถปิดการใช้คุกกี้ประเภทนี้ได้",
                            linkedCategory: "necessary"
                        },
                        {
                            title: "คุกกี้ที่เพื่อการวิเคราะห์",
                            description: "คุกกี้ประเภทนี้ช่วยให้เราสามารถวิเคราะห์หรือวัดผลการทำงาน เพื่อให้เราเข้าใจถึงความสนใจของคุณ เช่น การประมวลผลจำนวนผู้เยี่ยมชมเว็บไซต์และ/หรือแอปพลิเคชันของเรา พฤติกรรมการเยี่ยมชมเว็บไซต์และ/หรือแอปพลิเคชันของเรา จำนวนหน้าที่คุณเข้าใช้งาน โดยเราจะใช้ข้อมูลดังกล่าวในการปรับปรุงและพัฒนาประสิทธิภาพการทำงานของเว็บไซต์และ/หรือแอปพลิเคชันของเรา ให้ตอบสนองตามความต้องการและการใช้งานของคุณให้ดียิ่งขึ้น",
                            linkedCategory: "analytics"
                        },
                    ]
                }
            }
        }
    }
});