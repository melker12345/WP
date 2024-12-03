CMS-utveckling 2022
Examinerande laboration (individuell inlämningsuppgift 1)
Introduktion 29 november 2022
Redovisning 9 december 2022 (kl. 9-16)
Inlämning senast 9 december 2022 (kl. 23.59)
____________________________
Övergripande uppgift
Uppgiften går ut på att utifrån en befintlig statisk grundwebbplats skapa ett eget
WordPress-tema som gör webbplatsen dynamisk så att dess innehåll renderas dynamiskt.
Omfattade kursmål
G1, G3, G4, G6, G8, G9, G10, G11, G12, G13, G14, G17:
Kunskaper
• G1. Traditionellt CMS (exempel WordPress och Drupal)
• G3. Webbutveckling med PHP inom ramen för CMS
• G4. Grundläggande koncept i PHP (till exempel variabler, parametrar, funktioner,
stränghantering, villkorssatser, kontrollstrukturer och loopar)
Färdigheter
• G6. Ladda ner och installera ett CMS med PHP (exempelvis Wordpress eller
Drupal)
• G8. Använda och konfigurera mallar och teman utifrån en kunds behov i CMS
• G9. Skapa och hantera sidmallar, menyer och innehåll för webbplatser i CMS.
• G10. Anpassa eller utöka funktionalitet i CMS (till exempel plugins och widgets)
• G11. Installera och sätta upp en webbserver och använda PHP för att modifiera
standardbeteendet i ett CMS
• G12. Sätta upp en utvecklingsmiljö i PHP
Kompetenser
• G13. Självständigt skapa eller vidareutveckla en webbplats i CMS
• G14. Självständigt administrera en webbplats i WordPress eller Drupal samt
hantera användare
• G17. Paketera och publicera en webblösning med hjälp av CMS
Betygssättning
Möjliga betyg på uppgiften är IG / G
En godkänd uppgift är en förutsättning för minimum godkänt slutbetyg på kursen.
Krav på uppgiftens genomförande
1. Den statiska grundstrukturen för webbplatsen finns tillgänglig på
kurswebbplatsen, ITHS-distans. Alla dess delar och undersidor ska finnas med i det
färdiga temat:
2 av 3
a. Egen unik startsida. Välkomsthälsning och text samt header/hero-bild ska
renderas dynamiskt
b. En blogg/nyhetssida som listar alla blogg/nyhetsinlägg. Observera övrigt
innehåll på sidan såsom sidomeny med sökfunktion, meny med länkar till
webbplatsens alla sidor/undersidor, arkiv, kategorier, paginering osv
c. Sida för enskild bloggpost/nyhetsinlägg. Notera den övriga informationen
som skrivs ut; datum, författare, kategorier och utvald bild
d. Arkiv-sida som listar alla inlägg för en vald datumperiod
e. Kategorisida som listar alla inlägg inom vald kategori
f. Författarsida som listar alla inlägg av en specifik författare
g. 4 olika undersidor med olika layout (enligt den statiska grunden). Dessa ska
vara valbara från WordPress-gränssnittet vid skapandet av ny sida (se
specifikation för respektive sidmall under punkt 5)
h. Kontaktsida med kontaktformulär - någon form av stöd för att e-post skickas
från formuläret ska finnas installerat.
i. Sida som visar sökresultatet efter en sökning
j. 404-sida som visas om användaren hamnar fel (med länk till startsidan)
k. En dynamisk huvudmeny som kan anpassas från WordPress-gränssnittet
2. Webbplatsen ska först anpassas så att den får en realistisk inriktning med
passande design. Välj vad webbplatsens syfte ska vara – en blogg eller nyhetssida,
inom vilket område? Design kan anpassas fritt inom ramen för webbplatsens
grundläggande layout. Exempelvis färger, typsnitt, ikoner, storlek på bilder och
liknande kan ändras, men layouten ska i grunden vara den samma och alla delar
finnas kvar.
3. Skapa ett eget WordPress-tema med metadata som syns i WordPress-gränssnittet.
Även en skärmdump av temat ska visas i gränssnittet.
4. Skapa dynamisk utläsning av alla sidor och inlägg på webbplatsen. Hårdkodat
innehåll kan användas till mindre delar såsom copyright-texter i sidfoten (gärna
med dynamisk utläsning av årtal), etiketter och platshållare i kontaktformuläret,
platshållare i sökrutor och liknande.
5. Skapa sidmallar med olika utseende som är möjligt att välja från WordPress-
gränssnittet. De olika sidmallar som ska finnas är samma som undersida 1-4:
a. “Undersida” - en textspalt med sidomeny till höger med länk till övriga
undersidor
b. “Undersida 2” - en textspalt med sidomeny till vänster med länk till övriga
undersidor
c. “Undersida 3” - En textspalt över hela sidans innehållsbredd
d. “Undersida 4” - En textspalt till vänster och utvald bild till höger
6. Skapa ett “Widget-Area” någonstans på webbplatsen och skapa en widget av valfri
karaktär som går att lägga till från WordPress-gränssnittet
7. Installera de tillägg/plugin som du anser användbara. Välj minst 3 olika.
8. Skapa minst 3 olika användare för webbplatsen med olika namn och behörigheter.
9. Fyll på webbplatsen med dynamiskt innehåll, såsom inlägg i olika kategorier av
olika användare osv.
3 av 3
Övriga krav på webbplatsen
• Webbplatsen ska vara responsiv och fungera på olika enheter/skärmstorlek samt i
de vanliga webbläsarna (små avvikelser är okej men de ska fungera)
• Webbplatsen ska vara tillgänglig avseende de viktigaste delarna (Ej alla WCAG-
krav). Särskilt viktigt med kontraster, klickytor, typografi, semantisk HTML.
• Rimligt optimerad prestanda avseende exempelvis bildstorlekar
• Källkoden ska vara välstrukturerad och kommenterad där så är tillämpligt för ökad
läsbarhet.
Redovisning
När webbplatsen färdigställts ska den presenteras muntligen (och med skärmdelning eller
bildspel) för övriga klassen. Presentera svar på följande frågor:
• Visa upp hela webbplatsen och beskriv webbplatsens inriktning och de
anpassningar du gjort. Din källkod ska inte visas i sin helhet, utvalda intressanta
delar kan dock presenteras.
• Visa vilka tillägg/plugins du har installerat och varför.
• Visa hur din widget fungerar.
• Beskriv hur du arbetat med webbplatsens tillgänglighet.
• Beskriv några utmaningar du stött på och hur du löste dessa.
• Om du haft möjlighet - hade du valt en annan traditionell CMS-lösning? I så fall
vilken hade det blivit och varför?
• Om du skulle vidareutveckla temat, vad hade du då velat gå vidare med?
• Övrigt intressant att presentera.
Inlämning
Enligt senare instruktioner. Temat ska vid uppgiftens slutdatum vara klart att kunna köras i
en WordPress-installation.