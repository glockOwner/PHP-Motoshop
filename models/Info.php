<?php

class Info
{
    public static function getDeliveryInfoList()
    {
        $deliveryInfo = <<<DELIVERY
                            Интернет-магазин DriveMoto выполняет доставку любого товара в любую точку России. 

                            Стоимость доставки курьером по Москве
                            Доставка по Москве и Московской области осуществляется собственной курьерской службой мотосалона Drivemoto.
                            Доставка по Москве в пределах МКАД - 400 рублей. Доставка за пределы МКАД осуществляется из расчёта 400 рублей плюс 30 рублей за 1 км от МКАД.
                            
                            Доставка заказов свыше 5000 рублей по Москве и МО бесплатно.
                            Доставка мототехники по Москве и МО бесплатно.
                            
                            Стоимость доставки курьером по Московской области
                            Доставка за пределы МКАД осуществляется из расчёта 400 рублей плюс 30 рублей за 1 км от МКАД.
                            
                            Доставка товаров с основного склада в регионы
                            Доставка товаров по России осуществляется транспортными компаниями такими как: ПЭК (Бесплатно, при заказе от 7000 рублей, до регионального терминала ТК), СДЭК (Бесплатно, при заказе от 7000 рублей, до регионального терминала ТК).
                            *Кроме Сибирского и Дальневосточного округа (обговаривается с менеджером)
                            Остальные ТК такие как Деловые линии, Автотрейдинг, Байкал сервис, РАТЭК, ЖелдорЭкспедиция, Кит, Карго, ЖелдорАльянс, Ветеран Авиа и многими другими по тарифам этих компаний не зависимо от суммы заказа, за счет покупателя. 
                            
                            Средний срок доставки по Российской Федерации составляет от 2 до 10 дней, в зависимости от места нахождения заказанного товара, региона доставки и ТК. Более подробную информацию о стоимости и времени доставки, Вы можете уточнить у наших менеджеров. 
                            
                            Обращаем Ваше внимание, что собранная техника транспортируется ТК в обрешётке. Стоимость обрешетки оплачивает покупатель. 
                            
                            Стоимость доставки курьером по городу регионального салона
                            Доставка в пределах города - 400 рублей. (При заказе от 5000 рублей в региональном салоне, доставка бесплатная)
                            Доставка в пределах города мототехники бесплатно. 
                            
                            Стоимость доставки курьером по области регионального салона
                            Доставка за пределы города осуществляется из расчёта 400 рублей плюс 30 рублей за 1 км. 
                            
                            Внимание! Стоимость доставки заказа, собранного на разных региональных складах, оговаривается отдельно с менеджером интернет-магазина.
                            
                            Время доставки 
                            Время доставки согласовывается с менеджером Службы доставки, который обязательно свяжется с вами сразу после того, как вы разместите свой заказ. 
                            
                            Внимание! Неправильно указанный номер телефона, неточный или неполный адрес могут привести к дополнительной задержке! Пожалуйста, внимательно проверяйте ваши персональные данные при регистрации и оформлении заказа. Конфиденциальность ваших регистрационных данных гарантируется. 
                            
                            Время осуществления доставки зависит от времени размещения заказа и наличия товара на складе. 
                            
                            Вы также можете указать любое другое удобное время доставки, и покупка будет доставлена в удобное вам время. Иное время доставки, а также время доставки в населенные пункты области определяется по договоренности с клиентом. 
                            
                            Место доставки 
                            Доставка осуществляется по адресу, указанному при оформлении заказа. Если необходимо доставить товар по иному адресу, необходимо сообщить адрес менеджеру Службы доставки, который свяжется с вами непосредственно после оформления заказа на сайте. 
                            
                            Правила 
                            При доставке вам будут переданы все необходимые документы на покупку: товарный, кассовый чеки, а также гарантийный талон.При оформлении покупки на организацию, вам будет передан пакет документов, а также накладная, в которой необходимо поставить печать вашей организации.Цена, указанная в переданных вам курьером документах, является окончательной, курьер не обладает правом корректировки цены. Стоимость доставки выделяется в документах на покупку отдельной графой. 
                            
                            Внимание! Просим вас помнить, что все технические параметры и потребительские свойства приобретаемого товара вам следует уточнять у нашего менеджера до момента покупки товара. В обязанности работников Службы доставки не входит осуществление консультаций и комментариев относительно потребительских свойств товара. При доставке вам заказанного товара проверяйте комплектность доставленного товара, работоспособность товара, соответствие доставленного товара описанию на нашем сайте, также проверьте товар на наличие механических повреждений. При не заявлении вами при получении товара претензий по поводу механических повреждений, в дальнейшем подобные претензии не рассматриваются. В случае вопросов, пожеланий и претензий обращайтесь к менеджерам мотосалона.
                            
                            Обратите внимание!
                            Стоимость доставки заказа и наименование транспортной компании, через которую будет произведена доставка, собранного на региональных складах, оговаривается отдельно с менеджером данного регионального магазина.
DELIVERY;
        $deliveryInfoList=explode("\n",$deliveryInfo);
        return $deliveryInfoList;
    }

    public static function getPaymentInfoList()
    {
        $paymentInfo = <<<PAYMENT
                        Процедура покупки товара в нашем Интернет-магазине очень проста и состоит из нескольких шагов.

                        1. Оформление заказа
                        
                        После выбора товара нажмите кнопку В корзину — товар добавится в вашу корзину.
                        
                        Далее, если вы закончили выбирать товар, нажмите кнопку ваша корзина.
                        
                        На странице ваша корзина будут перечислены все выбранные вами товары.
                        
                        В поле Количество вы можете изменить количество товара для покупки. После изменения количества товара необходимо нажать кнопку Пересчитать для пересчета итоговой суммы заказа.
                        
                        В колонке Действия над каждым товаром можно произвести следующие действия: либо удалить товар из корзины, либо отложить товар на будущее.
                        
                        Также можно ввести код скидки в соответствующее поле.
                        
                        2. Оформление и подтверждение заказа
                        
                        После ввода необходимой информации о доставке товара (ФИО получателя, адрес доставки, контактные данные, вариант доставки, способ оплаты и т.д) для оформления заказа вам нужно нажать кнопку Оформить заказ.
                        
                        Копия заказа будет выслана на ваш e-mail, указанный при оформлении заказа.
                        
                        Внимание! Неправильно указанный номер телефона, неточный или неполный адрес могут привести к дополнительной задержке! Пожалуйста, внимательно проверяйте ваши персональные данные при регистрации и оформлении заказа.
                        
                        Через некоторое время (обычно в течение часа) после оформления покупки, с вами свяжется наш менеджер по контактным данным, указанным при оформлении заказа. С менеджером можно будет согласовать точное время и сроки доставки, а также уточнить детали.
                        
                        Примечание: Для постоянных клиентов на сайте магазина есть Регистрация. В своем кабинете вы можете просмотреть содержимое корзины, историю своих заказов, а также повторить или отказаться от заказа, подписаться на рассылку новостей магазина.
                        
                        3. Оплата и цены
                        
                        Цены, указанные на сайте, являются окончательными и не требуют доплат при стандартных условиях поставки. Все налоги включены в стоимость товара.
                        
                        Внимание! Для каждого отдельного заказа возможен только один способ оплаты на ваш выбор. Оплата заказа по частям различными способами невозможна.
                        
                        Возможные способы оплаты:
                        
                        Наличный расчет.
                        Оплата производится наличными курьеру при доставке или в магазине при самовывозе. Вместе с товаром передается товарный и кассовый чеки, а также гарантийный талон.
                        Оплата через Сбербанк.
                        Вы можете оплатить заказ в любом отделении Сбербанка. За услугу по переводу денег с вас возьмут от 3 до 7% от стоимости заказа, в зависимости от региона. Перечисление денег займет порядка 10 дней.
                        
                        4. Возврат
                        
                        Для возврата денежных средств необходимо написать заявление на возврат денег. Форма заявления произвольная, но в нем обязательно указываются ФИО покупателя, наименование товара, причина, по которой товар возвращается, а также требование заменить покупку или вернуть за нее денежные средства. 
PAYMENT;

        $paymentInfoList=explode("\n",$paymentInfo);
        return $paymentInfoList;
    }

    public static function getGuaranteeInfoList()
    {
        $guaranteeInfo = <<<GUARANTEE
Одной из важных составляющих работы нашего интернет-магазина является то, что продаваемые товары сертифицированы и обеспечены фирменной гарантией фирм-производителей.

Для осуществления гарантийного обслуживания необходимы:

• правильно и без помарок и исправлений заполненный гарантийный талон, в котором должны быть указаны модель и серийный номер изделия, дата продажи и печать торгующей организации;
• документ, подтверждающий покупку (товарная накладная);
• полная комплектация товара.

Обращаем также ваше внимание на то, что при получении и оплате заказа покупатель в присутствии курьера обязан проверить комплектацию и внешний вид изделия на предмет отсутствия физических дефектов (царапин, трещин, сколов и т.п.) и полноту комплектации. После отъезда курьера претензии по этим вопросам не принимаются.

Гарантийное обслуживание не производится, если:

• утерян или не заполнен гарантийный талон
• оборудование было поставлено на территорию РФ неофициально
• изделие имеет следы механического повреждения или вскрытия
• нарушены заводские пломбы
• были нарушены условия эксплуатации, транспортировки или хранения
• проводился ремонт лицами, не являющимися сотрудниками авторизованного сервисного центра
• использовались неоригинальные комплектующие

Подробное описание условий предоставления гарантии вы можете найти в документации к приобретенному товару и/или на сайте соответствующего производителя.
GUARANTEE;

        $guaranteeInfoList = explode("\n", $guaranteeInfo);
        return $guaranteeInfoList;
    }

    public static function getCreditInfoList()
    {
        $creditInfo = <<<CREDIT
Обстоятельства складываются по-разному, и нередко случается, что наши желания не совпадают с возможностями. Как же решить такую проблему, когда желание купить мотоцикл упирается в отсутствие денег? Для фаната двух колес медлить и ждать вообще не вариант – мотосезон пролетает, как одно мгновение, и очень жаль упускать возможность накататься, как следует, так чтобы хватило эмоций и впечатлений на все время вынужденного простоя межсезонья. Самый простой выход в ситуации временной финансовой несостоятельности – мототехника в кредит. 

Кредит на питбайк, скутер или любую другой товар, представленный в салоне «Drive Moto», это возможность буквально в один день стать полноправным владельцем мотоцикла или экипировки. Не теряйте напрасно времени – просто выбирайте, то что вы хотите приобрести, заполните и отправьте нам на рассмотрение элементарную форму заявки. Ваша заявка на получение кредита рассматривается он-лайн – в течение часа вы получите ответ на ваш запрос. Прозрачная схема кредитования предусматривает минимум документов. Станьте обладателем вашей мечты уже сегодня! 

Наилучшие условия кредитования вам предоставляет банк «Ренессанс Кредит» «Почта банк» АО «ОТП банк»

Условия получения кредита:
- первоначальный взнос от 0% до 99%;
- срок кредитования – от 6 до 36 месяцев;
- предусмотрена возможность досрочного погашения
- кредитование осуществляется по двум документам
- в залоге у банка не остаётся никаких документов.


Условия получения рассрочки:
- первоначальный взнос от 0% до 99%;
- срок кредитования – до 6 месяцев;
- предусмотрена возможность досрочного погашения
- рассрочка оформляется по двум документам
- в залоге у банка не остаётся никаких документов.
CREDIT;


        $creditInfoList = explode("\n", $creditInfo);
        return $creditInfoList;
    }

    public static function getAboutInfoList()
    {
        $aboutInfo = <<<ABOUT
Компания «Drivemoto» сегодня – это не только крупнейший мотосалон московского региона, но и целая сеть специализированных магазинов в различных городах страны:
Санкт-Петербурге, Новосибирске, Ростове-на-Дону, Екатеринбурге, Уфе и Воронеже. 
Мы готовы предложить посетителям огромный ассортимент мототехники, запчастей, экипировки и аксессуаров – у нас каждый клиент сможет найти именно то, что ему необходимо.

Универсальные возможности, а также доступная цена и невысокая стоимость техобслуживания, стали причиной того, что питбайки становятся все более популярными среди поклонников мототехники во всем мире. В нашей стране также наблюдается устойчивый рост интереса к мини-мотоциклам – и сегодня продажа питбайков стала одним из профильных направлений работы для «Drivemoto». Большая часть всей мототехники в мире производится в Поднебесной: мотоиндустрия Китайской Народной Республики сумела завоевать значительную часть внешнего рынка. Среди китайских производителей мототехники есть мощные промышленные корпорации, чья продукция отличается ровным, достойным качеством и способна конкурировать на равных с техникой американского и европейского производства. Китайские производители не останавливаются на достигнутом – как техника, так и технологии производства продолжают совершенствоваться, что положительным образом сказывается на общем качестве продукции.

Постоянный интерес к мототехнике, кроме прочего, поддерживается простотой обслуживания и ремонта, а доступность и наличие недорогих комплектующих и запчастей позволяют многим мотолюбителям самостоятельно заниматься модернизацией, настройкой и техническим обслуживанием своего стального друга. Устойчивый спрос на запчасти закономерно формирует предложение: продажа запчастей для мотоциклов, питбайков и скутеров является одним из ключевых направлений деятельности «Drivemoto».

Развитие интернет-трейдинга предоставляют владельцу мототехники возможность самостоятельно определится с выгодой приобретения комплектующих и расходников при техническом обслуживании и ремонте – купить запчасти для мотоцикла или питбайка сегодня может каждый мотолюбитель, не зависимо от места его проживания. В наших мотосалонах достойного качества запчасти для мототехники можно приобрести совсем недорого, особенно в сравнении с ценами на запчасти для мототехники именитых мотобрендов. Представленные в «Drivemoto» компоненты, агрегаты и расходные материалы отвечают всем необходимым требованиям и отличаются стопроцентным соответствием спецификациям конкретной модели. Высокое качество запчастей гарантировано практикой производственного контроля качества, осуществляемого непосредственно на производстве.

«Drivemoto» – это не только богатое разнообразие мототехники, но и впечатляющее количество доступной нашим клиентам мотоэкипировки. Продажа экипировки для мотоциклистов – еще одно из направлений деятельности нашей компании. Продукция множества брендов, заслужившая признание и рекомендации потребителей всего мира, представлена нашим клиентам вживую – все можно увидеть, потрогать собственными руками, примерить и лично убедится в высоком качестве предлагаемых товаров. Качественная мотоэкипировка для райдера – залог безопасности для его здоровья в случае возникновения неприятностей на дороге или на трассе соревнований. Поэтому важно к решению серьезного вопроса подбора мотозащиты подходить максимально ответственно. Принимая во внимание факторы безопасности, цели использования и назначения, а также финансовые возможности, вы всегда можете выбрать среди широчайшего ассортимента мотозащиты, экипировки и аксессуаров, представленных мотосалонах нашей сети, именно то, что вам нужно. Обращаем внимание прекрасной половины мотосообщества на то, что в «Drivemoto» широко представлена и женская мотоэкипировка. Качественная мотоэкипировка, благодаря тщательно продуманному дизайну и использованию современных материалов, не только обеспечивает необходимый уровень безопасного использования и позволяет предотвратить последствия неприятных ситуаций на дороге, но и дает возможность чувствовать себя комфортно при любых погодных условиях.

Команда «Drivemoto» – это еще один неоспоримый актив нашей компании. Наши специалисты досконально знают мототехнику, и способны не только помочь определится с выбором необходимого аппарата, исходя из условий эксплуатации, но и взять на себя задачи по ремонту и техобслуживанию, модернизации и настройке. Благодаря крепким партнерским связям и долгосрочному сотрудничеству с производителями техники, в распоряжении специалистов сервисных центров имеется обширный арсенал качественных запасных частей и расходных материалов для ремонта и тюнинга. Ориентируясь на потребности наших клиентов, мы создали все условия для того, чтобы каждый визит в «Drivemoto» заканчивался для вас удачным приобретением. 

ABOUT;


        $aboutInfoList = explode("\n", $aboutInfo);
        return $aboutInfoList;
    }

    public static function getContactsInfoList()
    {
        $contactsInfo = <<<CONTACTS
АДРЕС:
Г. ПЕРМЬ, УЛ. ГЕРОЕВ ХАСАНА, 37АЛИТД

ТЕЛЕФОНЫ ДЛЯ СВЯЗИ:
8 (495) 118-31-91 - ОТДЕЛ ПРОДАЖ

8 (915) 065-14-11 - ПО ВОПРОСАМ КАЧЕСТВА ОБСЛУЖИВАНИЯ

ЭЛЕКТРОННАЯ ПОЧТА:
ЗАДАЙТЕ ВОПРОС ПО ЭЛЕКТРОННОЙ ПОЧТЕ: INFO@PITBIKEMARKET.RU

РЕЖИМ РАБОТЫ:
ПН: 10.00-18.00
ВТ: 10.00-20.00
СР: 10.00-18.00
ЧТ: 10.00-20.00
ПТ: 10.00-18.00
СБ: 11.00-16.00
ВС: 11.00-15.00
CONTACTS;

        $contactsInfoList = explode("\n", $contactsInfo);
        return $contactsInfoList;
    }

}