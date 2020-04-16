<?php

$practices = 
[
  [
    "title"=> "1. Chaque image décorative est dotée d'une alternative textuelle appropriée.",
    "objectives"=> [
      "Éviter aux utilisateurs placés dans des contextes où les images ne sont pas perceptibles (navigateur texte, lecteur d’écran, navigateur avec images désactivées) d’être perturbés par des informations sur des images qui leur sont inutiles.",
      "Fournir aux robots d’indexation uniquement des informations pertinentes."
    ],
    "phases"=> [
      "Intégration",
      "Rédaction"
    ]
  ],
  [
    "title"=> "2. Chaque image-lien est dotée d'une alternative textuelle appropriée.",
    "objectives"=> [
      "Permettre aux utilisateurs placés dans des contextes où les images ne sont pas perceptibles (navigateur texte, lecteur d’écran, navigateur avec images désactivées) de comprendre le sens des liens présents sur des images qu’ils ne peuvent voir.",
      "Permettre aux robots d’exploiter l’information véhiculée par les images-liens (pour le référencement, l’indexation, la traduction automatique des alternatives d’images-texte).",
      "Permettre l’affichage d’un texte pertinent pendant le chargement des images."
    ],
    "phases"=> [
      "Intégration",
      "Rédaction"
    ]
  ],
  [
    "title"=> "3. Chaque image porteuse d'information est dotée d'une alternative textuelle appropriée.",
    "objectives"=> [
      "Permettre aux utilisateurs placés dans des contextes où les images ne sont pas perceptibles (navigateur texte, lecteur d'écran, navigateur avec images désactivées) de comprendre le sens des images qu'ils ne peuvent voir.",
      "Permettre aux robots d'exploiter l'information véhiculée par les images (référencement, indexation, traduction automatique des alternatives d'images-texte).",
      "Permettre l'affichage d'un texte pendant le chargement des images."
    ],
    "phases"=> [
      "Intégration",
      "Rédaction"
    ]
  ],
  [
    "title"=> "4. Les objets inclus sont dotés d'une alternative textuelle appropriée.",
    "objectives"=> [
      "Fournir un accès à l'information pour les utilisateurs dont le navigateur ou la plateforme ne supporte pas l'inclusion d'objets ou les technologies utilisées dans les objets inclus.",
      "Faciliter l'exploitation de ces contenus par les robots (référencement en particulier)."
    ],
    "phases"=> [
      "Intégration",
      "Rédaction"
    ]
  ],
  [
    "title"=> "5. Les contenus générés via les styles sont dotés d'une alternative appropriée.",
    "objectives"=> [
      "Permettre aux utilisateurs placés dans des contextes où les styles ne sont pas restitués (navigateur texte, lecteur d'écran, navigateur avec styles désactivés) d’accéder à l’information présente sous forme de contenus générés en CSS (images d’arrière-plan notamment).",
      "Permettre aux robots d'exploiter l'information véhiculée par les styles CSS (référencement, indexation, traduction automatique des alternatives)."
    ],
    "phases"=> [
      "Intégration"
    ]
  ],
  [
    "title"=> "6. Les pictogrammes typographiques sont dotés d'une alternative appropriée.",
    "objectives"=> [
      "Permettre aux utilisateurs placés dans des contextes où les polices CSS utilisées pour afficher des pictogrammes ne sont pas restituées (navigateur texte, lecteur d'écran, navigateur avec styles désactivés) de comprendre le sens de ces pictogrammes.",
      "Permettre aux robots d'exploiter l'information véhiculée par ces pictogrammes (référencement, indexation, traduction automatique des alternatives)."
    ],
    "phases"=> [
      "Intégration"
    ]
  ],
  [
    "title"=> "7. Chaque contenu audio et vidéo est accompagné de sa transcription textuelle.",
    "objectives"=> [
      "Permettre aux utilisateurs qui ne peuvent accéder au son ou à l’image proposés d’accéder à une transcription textuelle servant d’alternative.",
      "Permettre aux utilisateurs qui ne peuvent accéder au son d’accéder à l’information contenue dans la vidéo.",
      "Permettre l’exploitation de l’information par des robots pour améliorer son indexation et son référencement, ou encore pour permettre sa traduction par des outils linguistiques en ligne."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "8. L'information n'est pas véhiculée uniquement par la couleur.",
    "objectives"=> [
      "Permettre l’accès à l’information pour les utilisateurs dont le navigateur, la plate-forme, l’aide technique ou encore le handicap (comme le daltonisme) ne permettent pas de visualiser ou de différencier les couleurs.",
      "Rendre l’information accessible aux robots d’indexation."
    ],
    "phases"=> [
      "Design",
      "Rédaction"
    ]
  ],
  [
    "title"=> "9. Les captchas audio peuvent être réécoutés à volonté.",
    "objectives"=> [
      "Faciliter l’accès aux contenus ou services protégés par des captchas pour les utilisateurs ne pouvant exploiter les captchas graphiques.",
      "Faciliter l’utilisation des captchas audio. "
    ],
    "phases"=> [
      "Design",
      "Développement"
    ]
  ],
  [
    "title"=> "10. Les captchas sont accompagnés d'une solution alternative d'accès.",
    "objectives"=> [
      "Permettre aux utilisateurs qui ont des difficultés à passer les tests des captchas, en particulier graphiques, d’accéder par un autre moyen aux contenus ou services protégés."
    ],
    "phases"=> [
      "Design",
      "Développement"
    ]
  ],
  [
    "title"=> "11. Le code source de chaque page débute par une déclaration de type de document dont la syntaxe est conforme à celles recommandées par le W3C.",
    "objectives"=> [
      "Faciliter la validation du code source.",
      "Favoriser un rendu prévisible quel que soit le navigateur (des versions de navigateurs encore en circulation sont susceptibles de s’appuyer sur la syntaxe précise de la DTD pour adopter un mode de rendu CSS)."
    ],
    "phases"=> [
      "Intégration"
    ]
  ],
  [
    "title"=> "12. Chaque identifiant HTML n'est utilisé qu'une seule fois par page.",
    "objectives"=> [
      "Éviter les erreurs de restitution du contenu ou d’interaction via les scripts.",
      "Limiter les risques d’interprétation hasardeuse du Document Object Model (DOM) par des agents utilisateurs différents."
    ],
    "phases"=> [
      "Intégration"
    ]
  ],
  [
    "title"=> "13. Le contenu de chaque page est organisé selon une structure de titres et sous-titres hiérarchisée.",
    "objectives"=> [
      "Permettre aux utilisateurs qui le souhaitent de visualiser la structure du contenu de la page et d’y naviguer.",
      "Permettre aux machines et aux outils d’indexation d’extraire le plan de chaque page.",
      "Améliorer le référencement en facilitant l’interprétation du contenu par les robots d’indexation."
    ],
    "phases"=> [
      "Intégration",
      "Rédaction"
    ]
  ],
  [
    "title"=> "14. Le site n'impose pas de redirection ou de rafraîchissement automatique côté client.",
    "objectives"=> [
      "Permettre aux utilisateurs de conserver la maîtrise de leur environnement de travail.",
      "Éviter des coupures ou des pertes d’information en cours de lecture, notamment pour les utilisateurs équipés de lecteurs d’écran qu’un rafraîchissement ou une redirection temporisée interromprait lors de la consultation.",
      "Ne pas pénaliser la consultation du contenu en mobilité lorsque la qualité du réseau est variable sur une courte échelle de temps.",
      "Permettre à l’utilisateur d’éviter un surcroît non désiré de coût d’utilisation des données mobiles."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "15. Les dates sont présentées dans des formats explicites.",
    "objectives"=> [
      "Éviter aux utilisateurs les risques de méprise sur le sens d’une date.",
      "Faciliter la compréhension et la réutilisation des contenus concernés."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "16. L'emplacement des blocs de navigation est cohérent dans le code source de toutes les pages.",
    "objectives"=> [
      "Faciliter la mémorisation de l’organisation des pages et de la navigation pour les utilisateurs de lecteurs d’écran ou pour ceux qui naviguent au clavier."
    ],
    "phases"=> [
      "Intégration"
    ]
  ],
  [
    "title"=> "17. Le codage de caractères utilisé est UTF-8.",
    "objectives"=> [
      "Recourir à un jeu de caractères international.",
      "Prévenir les défauts d’affichage.",
      "Faciliter la manipulation des contenus par les utilisateurs et les développeurs."
    ],
    "phases"=> [
      "Intégration"
    ]
  ],
  [
    "title"=> "18. Le code source de chaque page contient une métadonnée qui définit le jeu de caractères.",
    "objectives"=> [
      "Permettre un affichage hors ligne correct des pages en indiquant au navigateur quel est le jeu de caractères utilisé.",
      "Prévenir le risque de problèmes d’affichage de caractères lié à un fonctionnement parfois hasardeux des mécanismes de rattrapage des navigateurs quand ils ne disposent pas de l’information nécessaire via l’en-tête HTTP content-type."
    ],
    "phases"=> [
      "Intégration"
    ]
  ],
  [
    "title"=> "19. Un contenu qui doit être restitué dans un lecteur d'écran ne lui est pas dissimulé.",
    "objectives"=> [
      "Permettre une restitution correcte des contenus masqués qui doivent être lus par les lecteurs d’écran."
    ],
    "phases"=> [
      "Intégration"
    ]
  ],
  [
    "title"=> "20. Le contenu et le sens de chaque page ne sont pas altérés lorsque les styles sont désactivés.",
    "objectives"=> [
      "Permettre la compréhension des contenus par les utilisateurs dont le navigateur n’appliquera pas les feuilles de styles du site ou dont le mode d’accès n’est pas visuel.",
      "Séparer rigoureusement les contenus de la présentation pour favoriser leur interopérabilité."
    ],
    "phases"=> [
      "Intégration"
    ]
  ],
  [
    "title"=> "21. Les éléments visuellement présentés sous forme de liste sont balisés de façon appropriée dans le code source.",
    "objectives"=> [
      "Permettre l’identification des listes par les navigateurs et les aides techniques et donc leur restitution appropriée afin de faciliter leur compréhension par les utilisateurs.",
      "Améliorer la sémantique du contenu des pages et sa réutilisabilité."
    ],
    "phases"=> [
      "Intégration",
      "Rédaction"
    ]
  ],
  [
    "title"=> "22. Les textes pouvant être mis en forme via des styles ne sont pas remplacés par des images.",
    "objectives"=> [
      "Faciliter l’adaptation du rendu au media (mobile ou autre) ou aux besoins de l’utilisateur (agrandissement de la taille des caractères, modification des couleurs, de la police, de la graisse, de la justification, etc.)."
    ],
    "phases"=> [
      "Intégration",
      "Rédaction"
    ]
  ],
  [
    "title"=> "23. La première occurrence d'une abréviation ou d'un acronyme dans le corps de chaque page donne accès à sa signification.",
    "objectives"=> [
      "Permettre à l’utilisateur d’accéder rapidement à la signification d’un sigle.",
      "Permettre l’exploitation du contenu par un robot (pour l’établissement d’un index des sigles).",
      "Favoriser le référencement du contenu."
    ],
    "phases"=> [
      "Design",
      "Intégration",
      "Développement",
      "Rédaction"
    ]
  ],
  [
    "title"=> "24. Le code source de chaque page ne contient pas d'éléments détournés à des fins de présentation.",
    "objectives"=> [
      "Permettre l’exploitation pertinente du code source par les agents utilisateurs (les navigateurs, les robots d’indexation des moteurs de recherche, les plages brailles, etc.).",
      "Alléger le code source en déportant la mise en forme dans les CSS."
    ],
    "phases"=> [
      "Intégration"
    ]
  ],
  [
    "title"=> "25. Le code source de chaque page ne contient pas d'éléments ou d'attributs de présentation.",
    "objectives"=> [
      "Favoriser l’adaptation de la mise en forme des contenus par les agents utilisateurs, selon les besoins de l’utilisateur.",
      "Réduire le poids du code source des pages, en incitant à mutualiser et à externaliser les informations de mise en forme grâce à CSS.",
      "Faciliter la réutilisation du contenu sans contraintes liées à sa mise en forme initiale."
    ],
    "phases"=> [
      "Intégration"
    ]
  ],
  [
    "title"=> "26. Le site propose au moins un moyen de contact.",
    "objectives"=> [
      "Faciliter le retour d’information de la part des utilisateurs.",
      "Favoriser la confiance en garantissant d’entrée de jeu à l’utilisateur la possibilité d’un recours en cas de difficultés."
    ],
    "phases"=> [
      "Prototype"
    ]
  ],
  [
    "title"=> "27. Le site propose au moins deux moyens de contact.",
    "objectives"=> [
      "Optimiser les possibilités de retour d’information de la part des utilisateurs.",
      "Éviter de mettre l’utilisateur en difficulté en cas d’indisponibilité ou de problèmes d’utilisation de l’un des moyens de contact."
    ],
    "phases"=> [
      "Prototype"
    ]
  ],
  [
    "title"=> "28. Les coordonnées postales et téléphoniques de la représentation locale ou du siège social des sociétés et organisations sont indiquées.",
    "objectives"=> [
      "Favoriser l’identification de l’entité responsable des contenus et des services.",
      "Fournir un moyen de contact alternatif."
    ],
    "phases"=> [
      "Prototype",
      "Rédaction"
    ]
  ],
  [
    "title"=> "29. Chaque demande d'information fait l'objet d'un accusé de réception.",
    "objectives"=> [
      "Informer les utilisateurs de la prise en compte de leur demande.",
      "Permettre aux utilisateurs d’obtenir une confirmation archivable de la bonne réception de leur demande d’information."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "30. Les délais de réponse aux demandes d'information sont indiqués.",
    "objectives"=> [
      "Informer les utilisateurs sur les délais chiffrés de réponse.",
      "Limiter les risques de relance de la part des utilisateurs.",
      "Rassurer sur la capacité à prendre en compte les demandes."
    ],
    "phases"=> [
      "Prototype",
      "Rédaction"
    ]
  ],
  [
    "title"=> "31. Les données contenues dans le Whois du site permettent de le relier directement à son propriétaire.",
    "objectives"=> [
      "Faciliter l'identification de l'entité ou de la personne responsable des contenus ou des services.",
      "Permettre à des utilisateurs de s'assurer qu'ils sont bien sur le bon site et non sur un site de phishing, par exemple."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "32. Le titre de chaque page permet d'identifier le site.",
    "objectives"=> [
      "Permettre aux utilisateurs d'identifier immédiatement le site dans les onglets, les favoris, dans la fenêtre du navigateur ou encore dans les lecteurs d'écran.",
      "Améliorer le référencement du site et sa présentation dans les moteurs de recherche."
    ],
    "phases"=> [
      "Développement",
      "Rédaction"
    ]
  ],
  [
    "title"=> "33. Le titre de chaque page permet d'identifier son contenu.",
    "objectives"=> [
      "Permettre aux utilisateurs d'identifier immédiatement la nature des contenus de chaque page dans les onglets, les favoris, dans la fenêtre du navigateur ou encore dans les lecteurs d'écran.",
      "Améliorer le référencement des pages et leur présentation dans les moteurs de recherche."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "34. Les contenus publicitaires ou sponsorisés sont identifiés comme tels.",
    "objectives"=> [
      "Permettre une identification immédiate des contenus publicitaires ou sponsorisés.",
      "Éviter les confusions entre contenus rédactionnels et publicitaires.",
      "Prévenir les risques associés aux conflits d'intérêt."
    ],
    "phases"=> [
      "Design",
      "Rédaction"
    ]
  ],
  [
    "title"=> "35. Les informations relatives aux droits de copie et de réutilisation sont accessibles depuis toutes les pages.",
    "objectives"=> [
      "Informer les utilisateurs sur les conditions sous lesquelles sont publiés les contenus.",
      "Informer les utilisateurs sur les conditions de copie et de réutilisation."
    ],
    "phases"=> [
      "Prototype",
      "Rédaction"
    ]
  ],
  [
    "title"=> "36. Le site fournit aux utilisateurs la possibilité de connaître les nouveaux contenus ou services.",
    "objectives"=> [
      "Permettre aux utilisateurs d'identifier immédiatement les nouveaux contenus ou services en ligne."
    ],
    "phases"=> [
      "Prototype",
      "Rédaction"
    ]
  ],
  [
    "title"=> "37. Si le site propose un espace personnel ou abonné, il est possible de sauvegarder les contenus personnels dans un format standard.",
    "objectives"=> [
      "Permettre l'archivage des contenus créés par l'utilisateur.",
      "Éviter à l'utilisateur d'éventuelles saisies redoublées en cas de réutilisation des contenus."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "38. Un lexique ou un glossaire adapté au public visé explique le vocabulaire sectoriel ou technique.",
    "objectives"=> [
      "Permettre aux utilisateurs de comprendre les contenus sectoriels ou à caractère technique.",
      "Faciliter l'utilisation d'un service.",
      "Améliorer le référencement sur des mots-clés ou expressions techniques."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "39. L'achat d'un produit ou service est possible sans création de compte.",
    "objectives"=> [
      "Permettre à l’acheteur de commander immédiatement.",
      "Lever la barrière de la création de compte.",
      "Augmenter le taux de conversion."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "40. Aucun produit ni service annexe n'est ajouté au panier de commande sans que cette action soit déclenchée par l'utilisateur.",
    "objectives"=> [
      "Laisser à l'utilisateur le contrôle de sa commande.",
      "Ne pas compromettre la relation de confiance avec l'utilisateur.",
      "Éviter toute forme de vente forcée."
    ],
    "phases"=> [
      "Prototype"
    ]
  ],
  [
    "title"=> "41. La disponibilité des produits est indiquée avant la validation définitive de la commande.",
    "objectives"=> [
      "Permettre d'anticiper d'éventuelles difficultés et une augmentation du délai de livraison."
    ],
    "phases"=> [
      "Prototype",
      "Rédaction"
    ]
  ],
  [
    "title"=> "42. Le délai de livraison estimé est indiqué avant la validation définitive de la commande.",
    "objectives"=> [
      "Permettre aux utilisateurs d'identifier la date réelle à laquelle le bien commandé sera effectivement en leur possession."
    ],
    "phases"=> [
      "Prototype",
      "Rédaction"
    ]
  ],
  [
    "title"=> "43. Les modalités de récupération d'un bien dématérialisé sont précisées avant la commande.",
    "objectives"=> [
      "Permettre à l’utilisateur d’anticiper les conditions et les moyens d’accès au service ou au bien dématérialisé.",
      "Éviter les déceptions et le traitement de réclamations."
    ],
    "phases"=> [
      "Prototype",
      "Rédaction"
    ]
  ],
  [
    "title"=> "44. La modification de la quantité de chaque article, l'ajout et la suppression d'un ou plusieurs articles restent possibles avant la validation définitive de la commande.",
    "objectives"=> [
      "Permettre à l'utilisateur de modifier facilement sa commande."
    ],
    "phases"=> [
      "Prototype",
      "Développement"
    ]
  ],
  [
    "title"=> "45. La nature et les caractéristiques quantifiables des produits et services sont indiquées.",
    "objectives"=> [
      "Permettre aux utilisateurs d'identifier précisément la nature et les spécifications des produits proposés."
    ],
    "phases"=> [
      "Prototype",
      "Rédaction"
    ]
  ],
  [
    "title"=> "46. La période et les conditions de validité des offres spéciales et promotions sont indiquées.",
    "objectives"=> [
      "Permettre aux utilisateurs d'identifier la période au cours de laquelle ils peuvent bénéficier des offres proposées."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "47. Le numéro d'immatriculation délivré aux sociétés ou organisations au terme des procédures légales d'enregistrement en vigueur dans leur pays est indiqué.",
    "objectives"=> [
      "Fournir aux utilisateurs une indication vérifiable de l'existence officielle de la structure qui propose les contenus ou le service."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "48. Le sous-total détaillé est indiqué avant la validation définitive de la commande.",
    "objectives"=> [
      "Permettre à l'utilisateur de connaître le détail du montant de sa commande.",
      "Lever un frein à la validation d'une commande."
    ],
    "phases"=> [
      "Prototype",
      "Développement"
    ]
  ],
  [
    "title"=> "49. Les conditions de financement sont indiquées.",
    "objectives"=> [
      "Permettre à l'utilisateur d'identifier le montant total qu'il aura à payer et les différentes composantes de ce montant."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "50. Les conditions de fonctionnement du service après-vente sont indiquées.",
    "objectives"=> [
      "Permettre aux utilisateurs de connaître les conditions d'assistance en cas de difficulté."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "51. Les conditions de débit ou d'encaissement sont spécifiées avant la validation définitive de la commande.",
    "objectives"=> [
      "Permettre aux utilisateurs d'identifier précisément les conditions de l'encaissement."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "52. Les conditions de garantie sont indiquées.",
    "objectives"=> [
      "Permettre aux utilisateurs d'identifier précisément la nature des services associés et leur coût."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "53. Les conditions de vente ou d'utilisation sont accessibles depuis toutes les pages.",
    "objectives"=> [
      "Permettre un accès facile et permanent à toutes les conditions de réalisation du service."
    ],
    "phases"=> [
      "Prototype",
      "Rédaction"
    ]
  ],
  [
    "title"=> "54. Les informations relatives à la zone de livraison des produits ou de réalisation des services sont indiquées.",
    "objectives"=> [
      "Éviter une navigation et des commandes inutiles, voire une perte de temps pour l'utilisateur ainsi que pour la structure qui propose les biens ou les services."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "55. Les moyens de paiement acceptés et les procédures correspondantes sont indiqués.",
    "objectives"=> [
      "Permettre aux utilisateurs d'anticiper le mode et les conditions de paiement et de vérifier avant la commande s'ils pourront la mener à son terme."
    ],
    "phases"=> [
      "Prototype",
      "Rédaction"
    ]
  ],
  [
    "title"=> "56. Les horaires et tarifs de fonctionnement des services mis à la disposition des utilisateurs sont indiqués.",
    "objectives"=> [
      "Permettre aux utilisateurs de connaître les services mis à leur disposition et leur fonctionnement."
    ],
    "phases"=> [
      "Prototype",
      "Rédaction"
    ]
  ],
  [
    "title"=> "57. Les recours en cas de litige sont indiqués dans les conditions générales de vente ou d'utilisation.",
    "objectives"=> [
      "Rassurer l'internaute avant l'achat.",
      "Donner à l'acheteur toutes les informations liées à son achat, que celui-ci se passe bien ou non."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "58. L'adresse et les conditions de retour des produits sont indiquées.",
    "objectives"=> [
      "Permettre aux utilisateurs d'anticiper d'éventuelles difficultés d'utilisation et/ou de fonctionnement du bien ou du service proposé.",
      "Réduire le nombre de sollicitations du service client."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "59. Le mode de dépôt et la procédure de traitement des réclamations sont indiqués.",
    "objectives"=> [
      "Permettre aux utilisateurs de comprendre ou d'anticiper d'éventuelles difficultés sur le site ou lors de la transaction."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "60. Les conditions de remboursement sont indiquées.",
    "objectives"=> [
      "Permettre aux utilisateurs d'identifier précisément les pièces nécessaires en cas de nécessité de retour du produit.",
      "Anticiper d'éventuels problèmes en cas de demande de remboursement réalisée après le délai légal.",
      "Diminuer le nombre de démarches inutiles et le nombre de demandes au support client.",
      "Augmenter le taux de transformation d'un site e-commerce."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "61. Les matériels et logiciels nécessaires au fonctionnement du service sont indiqués avant la validation de la commande.",
    "objectives"=> [
      "Permettre à l’utilisateur d’anticiper les conditions et les moyens d’utilisation du service.",
      "Limiter les réclamations."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "62. Les prix affichés mentionnent le détail des taxes et suppléments éventuels ainsi que le montant hors taxes.",
    "objectives"=> [
      "Permettre aux utilisateurs d'identifier précisément et avant l'achat le montant total qu'ils auront à payer.",
      "Permettre aux utilisateurs d'identifier précisément les montants déductibles et les différentes imputations."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "63. Une adresse de livraison différente de l'adresse de facturation peut être spécifiée.",
    "objectives"=> [
      "Permettre aux utilisateurs de faire livrer un achat sur le lieu de leur choix."
    ],
    "phases"=> [
      "Prototype",
      "Développement"
    ]
  ],
  [
    "title"=> "64. Le site accepte au moins deux moyens de paiement.",
    "objectives"=> [
      "Permettre aux utilisateurs de choisir le mode de paiement qui leur convient le mieux dans leur contexte."
    ],
    "phases"=> [
      "Prototype",
      "Développement"
    ]
  ],
  [
    "title"=> "65. La référence de la transaction est affichée au client après la validation de sa commande.",
    "objectives"=> [
      "Permettre aux utilisateurs d'afficher et éventuellement d'imprimer une trace de leur commande."
    ],
    "phases"=> [
      "Prototype",
      "Développement"
    ]
  ],
  [
    "title"=> "66. Les mentions d'appartenance à un ordre ou groupe professionnel, d'un label ou d'une récompense sont accompagnées d'un lien vers la source.",
    "objectives"=> [
      "Donner un accès immédiat à l'utilisateur pour lui permettre de comprendre de quoi il s'agit.",
      "Permettre à l'utilisateur de vérifier par lui-même l'information.",
      "Accroître le degré de confiance ou de crédibilité."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "67. Les produits indisponibles font l'objet d'une différenciation visuelle et textuelle.",
    "objectives"=> [
      "Permettre à l'utilisateur d'identifier immédiatement et sans confusion possible les produits indisponibles.",
      "Éviter l'effet de déception si un utilisateur débute une procédure de commande et s'aperçoit tardivement de l'indisponibilité du produit désiré."
    ],
    "phases"=> [
      "Design",
      "Rédaction"
    ]
  ],
  [
    "title"=> "68. Un courriel indiquant la référence de la transaction et les données de la commande est envoyé suite à la validation.",
    "objectives"=> [
      "Donner à l'utilisateur une confirmation des informations relatives à la commande.",
      "Permettre à l'utilisateur de conserver un historique de la transaction ailleurs que dans le site."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "69. Chaque réclamation fait l'objet d'un accusé de réception.",
    "objectives"=> [
      "Permettre à l'utilisateur d'obtenir une confirmation de sa demande en-dehors du contexte de la navigation sur le site.",
      "Éviter au service client de recevoir plusieurs demandes concernant une même réclamation."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "70. Le site propose au moins un moyen de contacter le responsable des réclamations.",
    "objectives"=> [
      "Permettre aux utilisateurs de s'adresser ou d'adresser directement leurs réclamations au bon interlocuteur.",
      "Rassurer les internautes sur le fait qu'ils pourront facilement interagir avec le service des réclamations en cas de problème."
    ],
    "phases"=> [
      "Prototype",
      "Rédaction"
    ]
  ],
  [
    "title"=> "71. Le site propose au moins un moyen de contacter le modérateur des espaces publics.",
    "objectives"=> [
      "Permettre aux utilisateurs de contacter le modérateur pour demander une correction, poser une question ou signaler des abus."
    ],
    "phases"=> [
      "Prototype"
    ]
  ],
  [
    "title"=> "72. Les espaces publics proposent au moins un moyen de signaler les abus.",
    "objectives"=> [
      "Faciliter le signalement de contenus illégaux ou inappropriés.",
      "Accélérer la détection de ces contenus.",
      "Limiter les risques de consultation de contenus illégaux ou inappropriés."
    ],
    "phases"=> [
      "Prototype"
    ]
  ],
  [
    "title"=> "73. Les conditions de modération des espaces publics sont indiquées.",
    "objectives"=> [
      "Expliquer aux utilisateurs pour quelles raisons et dans quelle mesure leurs publications peuvent être modérées.",
      "Limiter le nombre de réclamations des utilisateurs ne voyant pas leur publication apparaître."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "74. Les contenus ou fichiers destinés à des espaces publics peuvent être vérifiés avant leur envoi définitif.",
    "objectives"=> [
      "Permettre à l'utilisateur de vérifier sa saisie en contexte et, si nécessaire, de la corriger avant envoi."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "75. Les informations destinées à des espaces publics peuvent être prévisualisées sous la forme où elles seront affichées.",
    "objectives"=> [
      "Permettre à l'utilisateur de vérifier et de corriger si nécessaire sa saisie en tenant compte de la présentation finale du contenu concerné."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "76. La durée des contenus vidéo ou audio est indiquée.",
    "objectives"=> [
      "Informer l'utilisateur afin qu'il puisse décider en connaissance de cause de consulter ou de télécharger ou non le contenu concerné."
    ],
    "phases"=> [
      "Prototype",
      "Développement",
      "Rédaction"
    ]
  ],
  [
    "title"=> "77. Le format des fichiers proposés en téléchargement est indiqué.",
    "objectives"=> [
      "Permettre aux utilisateurs de savoir en temps utile si leurs outils les autorisent à consulter les fichiers proposés en téléchargement.",
      "Réduire la charge serveur en évitant les téléchargements inutiles."
    ],
    "phases"=> [
      "Développement",
      "Rédaction"
    ]
  ],
  [
    "title"=> "78. La taille des fichiers internes proposés en téléchargement est indiquée.",
    "objectives"=> [
      "Informer de façon préventive les utilisateurs sur la quantité de données à télécharger.",
      "Permettre aux utilisateurs de différer le téléchargement en connexion bas débit ou mobile."
    ],
    "phases"=> [
      "Développement",
      "Rédaction"
    ]
  ],
  [
    "title"=> "79. La langue des fichiers en téléchargement est précisée lorsqu'elle diffère de celle de la page d'origine.",
    "objectives"=> [
      "Éviter aux utilisateurs des téléchargements inutiles.",
      "Informer les utilisateurs sur les fichiers téléchargés."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "80. Les animations, sons et clignotements peuvent être mis en pause.",
    "objectives"=> [
      "Laisser à l'utilisateur le contrôle des animations lors de la consultation du contenu.",
      "Ne pas perturber l'attention en imposant des éléments pouvant gêner celle-ci.",
      "Permettre la consultation pas à pas d'animations séquentielles ou de contenus sonores."
    ],
    "phases"=> [
      "Design",
      "Intégration"
    ]
  ],
  [
    "title"=> "81. Le déroulement des animations ne bloque pas la navigation ou l'accès aux contenus.",
    "objectives"=> [
      "Fournir aux utilisateurs un accès direct et immédiat aux contenus, même lorsque l'administrateur du site décide de proposer une animation ou une publicité préalable."
    ],
    "phases"=> [
      "Prototype",
      "Intégration"
    ]
  ],
  [
    "title"=> "82. Les sons et vidéos sont déclenchés par l'utilisateur.",
    "objectives"=> [
      "Laisser à l'utilisateur le contrôle de l'interface sonore et visuelle lors de la consultation du site.",
      "Ne pas surprendre l'utilisateur par la diffusion inattendue d'un contenu audio.",
      "Ne pas imposer à l'utilisateur le déclenchement d'un contenu animé."
    ],
    "phases"=> [
      "Prototype",
      "Intégration"
    ]
  ],
  [
    "title"=> "83. Le texte des documents PDF internes est sélectionnable.",
    "objectives"=> [
      "Permettre le référencement des contenus des documents PDF.",
      "Faciliter la manipulation et la réutilisation du contenu des documents PDF.",
      "Garantir la lisibilité des contenus des documents PDF."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "84. Les documents PDF internes sont dotés d'une structure de titres.",
    "objectives"=> [
      "Permettre aux utilisateurs d’accéder directement à différentes sections d’un document PDF.",
      "Fournir une structure de titres aux utilisateurs qui en ont besoin.",
      "Permettre la consultation d’un PDF via une aide technique."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "85. Chaque champ de formulaire est associé dans le code source à une étiquette qui lui est propre.",
    "objectives"=> [
      "Faciliter la compréhension des données attendues dans les formulaires.",
      "Permettre aux aides techniques d'accessibilité de restituer les champs de formulaires en les associant systématiquement à une étiquette indiquant leur rôle et la nature de la saisie attendue.",
      "Faciliter la saisie en permettant de sélectionner le champ via un clic sur son étiquette aussi bien que sur le champ lui-même (particulièrement en cas de case à cocher ou de case radio)."
    ],
    "phases"=> [
      "Intégration"
    ]
  ],
  [
    "title"=> "86. Les informations complétant l'étiquette d'un champ sont associées à celui-ci dans le code-source",
    "objectives"=> [
      "Optimiser le rendu dans les lecteurs d’écran en permettant d’expliciter les étiquettes des champs de formulaire."
    ],
    "phases"=> [
      "Intégration"
    ]
  ],
  [
    "title"=> "87. L'étiquette de chaque champ de formulaire indique si la saisie est obligatoire.",
    "objectives"=> [
      "Permettre aux utilisateurs de savoir à l'avance si un champ est obligatoire.",
      "Prévenir les erreurs avant qu'elles ne surviennent."
    ],
    "phases"=> [
      "Prototype",
      "Intégration"
    ]
  ],
  [
    "title"=> "88. L'étiquette de chaque champ de formulaire indique, le cas échéant, quel format de saisie doit être respecté.",
    "objectives"=> [
      "Limiter le risque d'erreurs de saisie.",
      "Limiter les risques associés à l'envoi de données erronées ou impossibles à exploiter.",
      "Éviter que l'utilisateur ne renonce à poursuivre faute d'information sur la saisie attendue."
    ],
    "phases"=> [
      "Prototype"
    ]
  ],
  [
    "title"=> "89. L'utilisateur est averti lorsqu'une saisie est sensible à la casse.",
    "objectives"=> [
      "Éviter le risque d'erreur et donc éviter à l'utilisateur de devoir remplir plusieurs fois un même champ.",
      "Éviter l'incompréhension de l'utilisateur qui pense avoir rempli correctement le champ et qui le voit signalé en erreur."
    ],
    "phases"=> [
      "Prototype",
      "Intégration"
    ]
  ],
  [
    "title"=> "90. La création d'un mot de passe par l'utilisateur fait l'objet d'un mécanisme de prévention des erreurs de saisie.",
    "objectives"=> [
      "Éviter à l'utilisateur de saisir un mot de passe qui ne correspond finalement pas à celui qu'il a souhaité ou mémorisé."
    ],
    "phases"=> [
      "Prototype",
      "Développement"
    ]
  ],
  [
    "title"=> "91. Les caractères saisis dans un champ de mot de passe peuvent être affichés en clair.",
    "objectives"=> [
      "Faciliter la saisie des mots de passe, notamment sur les claviers virtuels des terminaux mobiles.",
      "Prévenir les erreurs."
    ],
    "phases"=> [
      "Prototype",
      "Intégration"
    ]
  ],
  [
    "title"=> "92. Chaque étiquette de formulaire est visuellement rattachée au champ qu'elle décrit.",
    "objectives"=> [
      "Permettre aux utilisateurs d'identifier sans ambiguïté les champs de formulaire et la nature des informations à saisir.",
      "Prévenir les erreurs de saisie.",
      "Faciliter et accélérer l'usage du formulaire."
    ],
    "phases"=> [
      "Prototype",
      "Design"
    ]
  ],
  [
    "title"=> "93. En cas de rejet des données saisies dans un formulaire, les champs contenant les données rejetées sont indiqués à l'utilisateur.",
    "objectives"=> [
      "Donner un retour à l'utilisateur sur l'action qu'il vient d'effectuer.",
      "Guider l'utilisateur directement vers les éléments sur lesquels il doit agir."
    ],
    "phases"=> [
      "Prototype",
      "Intégration"
    ]
  ],
  [
    "title"=> "94. En cas de rejet des données saisies dans un formulaire, les raisons du rejet sont indiquées à l'utilisateur.",
    "objectives"=> [
      "Aider l'internaute à comprendre ce qu'on attend et, ainsi, faciliter le passage à l'étape suivante.",
      "Éviter la frustration de l'utilisateur face à une erreur dont il n'aurait pas la solution immédiate."
    ],
    "phases"=> [
      "Prototype",
      "Intégration"
    ]
  ],
  [
    "title"=> "95. En cas de rejet des données saisies dans un formulaire, toutes les données saisies peuvent être modifiées par l'utilisateur.",
    "objectives"=> [
      "Laisser la main à l'utilisateur sur la totalité des informations qu'il donne.",
      "Faciliter la correction des erreurs commises par l'utilisateur.",
      "Permettre à l'utilisateur de modifier des informations sur lesquelles il voudrait revenir.",
      "Éviter que l'utilisateur ne quitte le formulaire avant validation définitive."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "96. Lors de la saisie d'un formulaire réparti sur plusieurs pages, un récapitulatif global est affiché avant l'envoi définitif.",
    "objectives"=> [
      "Donner à l'utilisateur une vue globale de ce qu'il a saisi dans les pages précédentes.",
      "Permettre à l'utilisateur de vérifier l'ensemble des informations d'une procédure complexe avant la soumission définitive."
    ],
    "phases"=> [
      "Prototype",
      "Développement"
    ]
  ],
  [
    "title"=> "97. La page affichée après l'envoi d'un formulaire permet de reprendre directement la navigation.",
    "objectives"=> [
      "Éviter de dérouter l'utilisateur en le menant à une page en impasse, y compris par l'utilisation de la fonction « page précédente » du navigateur.",
      "Limiter le risque de double envoi de formulaire."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "98. La soumission d'un formulaire est suivie d'un message indiquant la réussite ou non de l'action souhaitée.",
    "objectives"=> [
      "Fournir à l'utilisateur un retour immédiat et explicite sur l'action qu'il vient d'effectuer.",
      "Éviter la frustration d'un utilisateur qui pense que le processus s'est déroulé avec succès alors qu'il y a eu un problème."
    ],
    "phases"=> [
      "Prototype",
      "Développement"
    ]
  ],
  [
    "title"=> "99. Les processus complexes sont accompagnés de la liste de leurs étapes.",
    "objectives"=> [
      "Donner de la visibilité à l'utilisateur sur les actions qu'il va réaliser (temps, ordre des étapes, informations nécessaires pour les accomplir, etc.).",
      "Éviter que l'utilisateur ne se sente piégé dans un processus dont il n'avait pas prévu la durée."
    ],
    "phases"=> [
      "Prototype"
    ]
  ],
  [
    "title"=> "100. L'étape en cours d'un processus complexe est indiquée.",
    "objectives"=> [
      "Permettre à l'utilisateur d'identifier le degré d'avancement dans un processus.",
      "Rassurer l'utilisateur lors de la réalisation d'un processus complexe."
    ],
    "phases"=> [
      "Prototype",
      "Design"
    ]
  ],
  [
    "title"=> "101. Chaque étape d'un processus complexe permet de revenir à l'étape précédente.",
    "objectives"=> [
      "Faciliter l’utilisation des formulaires répartis sur plusieurs pages successives.",
      "Réduire les risques d’erreurs de saisie.",
      "Limiter les risques d’abandon en cours de processus."
    ],
    "phases"=> [
      "Prototype",
      "Développement"
    ]
  ],
  [
    "title"=> "102. L'utilisateur est averti de la perte d'information en cas d'utilisation de l'historique de son navigateur dans un processus complexe.",
    "objectives"=> [
      "Faciliter l’utilisation des formulaires répartis sur plusieurs pages successives.",
      "Limiter les risques d’abandon en cours de processus."
    ],
    "phases"=> [
      "Prototype",
      "Développement"
    ]
  ],
  [
    "title"=> "103. La navigation dans un processus complexe ne provoque pas la perte des données précédemment soumises.",
    "objectives"=> [
      "Faciliter la saisie et sa correction dans les formulaires répartis par étapes.",
      "Limiter les risques d’abandon en cours de procédure."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "104. Le copier coller est possible dans les champs de formulaire.",
    "objectives"=> [
      "Faciliter la saisie dans les formulaires."
    ],
    "phases"=> [
      "Intégration"
    ]
  ],
  [
    "title"=> "105. Les éléments d'une liste déroulante qui peuvent être regroupés le sont de manière appropriée.",
    "objectives"=> [
      "Permettre aux aides techniques de restituer à l'utilisateur une liste dont l'organisation est clairement perceptible et qui facilite le passage d'un élément du contenu à l'autre.",
      "Favoriser un rendu approprié des listes déroulantes complexes dans tous les navigateurs."
    ],
    "phases"=> [
      "Intégration"
    ]
  ],
  [
    "title"=> "106. Les listes d'options de formulaires sont présentées dans un ordre identifiable.",
    "objectives"=> [
      "Permettre aux utilisateurs d'accéder rapidement à l'item de liste recherché."
    ],
    "phases"=> [
      "Intégration"
    ]
  ],
  [
    "title"=> "107. Chaque lien est doté d'un intitulé dans le code source.",
    "objectives"=> [
      "Éviter aux utilisateurs d'avoir uniquement une URL peu compréhensible en guise de libellé.",
      "Éviter les liens qui deviennent invisibles lorsque les styles CSS ou les images d'arrière-plan ne sont pas pris en compte."
    ],
    "phases"=> [
      "Intégration"
    ]
  ],
  [
    "title"=> "108. Le soulignement est réservé aux hyperliens.",
    "objectives"=> [
      "Éviter les clics inutiles sur des contenus soulignés perçus comme des hyperliens.",
      "Faciliter l'identification des liens."
    ],
    "phases"=> [
      "Design",
      "Rédaction"
    ]
  ],
  [
    "title"=> "109. Les hyperliens sont visuellement différenciés du reste du contenu.",
    "objectives"=> [
      "Permettre aux utilisateurs d'identifier facilement les liens au fil du texte ainsi que les blocs de navigation."
    ],
    "phases"=> [
      "Design"
    ]
  ],
  [
    "title"=> "110. Le site n'applique pas le même style aux liens visités et non visités.",
    "objectives"=> [
      "Faciliter l'identification des contenus déjà visités.",
      "Faciliter l'identification des contenus restant à découvrir.",
      "Inciter à la navigation sur de nouvelles pages."
    ],
    "phases"=> [
      "Design",
      "Intégration"
    ]
  ],
  [
    "title"=> "111. Le site n'impose pas d'interdiction ou de restriction à la mise en place des liens entrants.",
    "objectives"=> [
      "Faciliter le référencement à travers l'obtention de backlinks.",
      "Augmenter la visibilité du site pour les utilisateurs."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "112. Le survol ou l'activation des hyperliens ne modifie pas la mise en page.",
    "objectives"=> [
      "Limiter les difficultés à cliquer sur un lien lorsque celui-ci occupe plus d'espace en mode survolé ou activé.",
      "Limiter les effets de clignotement ou de déplacement de contenus lors du survol d'un lien ou de sa prise de focus clavier."
    ],
    "phases"=> [
      "Intégration"
    ]
  ],
  [
    "title"=> "113. Les hyperliens de même nature ont des couleurs, des formes et des comportements identiques sur toutes les pages.",
    "objectives"=> [
      "Accélérer l'apprentissage du fonctionnement de l'interface.",
      "Améliorer l'identification des liens et de leurs fonctions respectives."
    ],
    "phases"=> [
      "Prototype",
      "Design"
    ]
  ],
  [
    "title"=> "114. Tous les hyperliens internes du site sont valides.",
    "objectives"=> [
      "Éviter les erreurs 404 en cours de navigation.",
      "Faciliter un accès rapide à tous les contenus."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "115. Le libellé de chaque hyperlien décrit sa fonction ou la nature du contenu vers lequel il pointe.",
    "objectives"=> [
      "Permettre aux utilisateurs d'identifier précisément la nature du lien et d'éviter des actions erronées.",
      "Permettre aux outils d'indexation d'associer un libellé à une ressource.",
      "Permettre aux lecteurs d'écran d'en indiquer la cible de façon explicite et d'éviter de désorienter les utilisateurs."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "116. Les hyperliens consécutifs sont séparés visuellement.",
    "objectives"=> [
      "Éviter les confusions entre deux liens consécutifs.",
      "Améliorer la lisibilité des liens et des contenus."
    ],
    "phases"=> [
      "Design",
      "Rédaction"
    ]
  ],
  [
    "title"=> "117. Les hyperliens internes et externes sont différenciés.",
    "objectives"=> [
      "Avertir clairement l'internaute du fait qu'il va quitter le service en ligne qu'il est en train de visiter.",
      "Faciliter le repérage des liens externes"
    ],
    "phases"=> [
      "Design"
    ]
  ],
  [
    "title"=> "118. L'identité de l'auteur, de la société ou de l'organisation est indiquée.",
    "objectives"=> [
      "Rassurer l'utilisateur en lui permettant d'identifier directement l'auteur (au sens large).",
      "Limiter les risques de défiance."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "119. L'identité de la personne ou du service responsable des contenus est indiquée.",
    "objectives"=> [
      "Permettre aux utilisateurs d'identifier sans ambiguïté un interlocuteur physique capable de répondre aux questions éventuelles sur les contenus proposés, ou d'assumer les responsabilités liées à ces contenus."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "120. La page d'accueil expose la nature des contenus et services proposés.",
    "objectives"=> [
      "Donner aux utilisateurs une vision immédiate de la nature du site et des contenus proposés.",
      "Éviter les recherches inutiles."
    ],
    "phases"=> [
      "Prototype",
      "Rédaction"
    ]
  ],
  [
    "title"=> "121. Le nom du site et/ou le nom de l'auteur sont indiqués sur chaque page.",
    "objectives"=> [
      "Permettre à l'utilisateur d'identifier immédiatement et en permanence l'auteur, l'entité qui administre le site ou le site lui-même le cas échéant."
    ],
    "phases"=> [
      "Prototype",
      "Rédaction"
    ]
  ],
  [
    "title"=> "122. Si le site est réservé ou destiné à un public spécifique, ce public est mentionné au moins sur la page d'accueil.",
    "objectives"=> [
      "Éviter des consultations inutiles.",
      "Délivrer un avertissement aux utilisateurs."
    ],
    "phases"=> [
      "Prototype",
      "Rédaction"
    ]
  ],
  [
    "title"=> "123. L'adresse complète et le numéro de téléphone des sociétés et organisations sont accessibles depuis toutes les pages du site.",
    "objectives"=> [
      "Donner aux utilisateurs qui le souhaitent la possibilité d'accéder sans difficulté aux moyens de contact téléphoniques et postaux."
    ],
    "phases"=> [
      "Prototype",
      "Rédaction"
    ]
  ],
  [
    "title"=> "124. La racine du site contient des instructions pour les robots d'indexation.",
    "objectives"=> [
      "Permettre un référencement ciblé.",
      "Améliorer le guidage des outils de recherche."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "125. Le code source de chaque page contient une métadonnée qui en décrit le contenu.",
    "objectives"=> [
      "Permettre aux outils de recherche et d'indexation d'extraire des informations à propos du contenu des pages et ainsi d'améliorer la restitution aux utilisateurs des résultats de recherche."
    ],
    "phases"=> [
      "Intégration",
      "Rédaction"
    ]
  ],
  [
    "title"=> "126. Le code source des pages contient un appel valide à un icône de favori.",
    "objectives"=> [
      "Améliorer l'identification visuelle du site et de ses pages.",
      "Faciliter l'identification dans le navigateur et dans les favoris ou signets.",
      "Permettre l'affichage, l'appel, et la mémorisation éventuelle de l'icône de favori par tous les navigateurs."
    ],
    "phases"=> [
      "Intégration"
    ]
  ],
  [
    "title"=> "127. L'extension utilisée est cohérente avec l'identité, l'activité, la zone géographique couverte ou avec le nom de domaine.",
    "objectives"=> [
      "Contribuer à la compréhension immédiate de l'identité, de l'activité ou de la zone géographique du site.",
      "Améliorer la capacité des utilisateurs à mémoriser l'adresse du site et à la retrouver en cas d'oubli."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "128. Le site propose un fichier sitemap indiquant les contenus à explorer.",
    "objectives"=> [
      "Mettre à disposition des informations synthétiques et lisibles par les machines sur l'ensemble des contenus proposés.",
      "Le fichier sitemap permet d'indiquer aux moteurs majeurs l'intégralité des contenus à indexer. L'intérêt premier est pour les sites très profonds comme les catalogues en ligne avec plusieurs milliers de produits ou encore des sites dont le contenu est difficilement accessible linéairement comme des encyclopédies.",
      "L'intérêt pour un site de quelques pages est faible voire inexistant, mais la présence du fichier ne sera pas pénalisante."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "129. Si le site déclare respecter un ou plusieurs standards ou référentiels, un lien est proposé vers chacun d'entre eux.",
    "objectives"=> [
      "Faciliter la compréhension par l'utilisateur des règles de qualité, d'accessibilité ou autres appliquées sur le site.",
      "Accroître la confiance dans les informations délivrées sur le site."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "130. L'indicatif international est disponible pour tous les numéros de téléphone.",
    "objectives"=> [
      "Permettre l'utilisation immédiate du contact téléphonique quel que soit le contexte utilisateur."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "131. Le pays est précisé pour toutes les adresses postales.",
    "objectives"=> [
      "Permettre aux utilisateurs d'identifier immédiatement le pays associé à l'adresse postale, sans ambiguïté et sans avoir recours à d'autres éléments (ville, région, code postal, numéro de téléphone)."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "132. Le code source de chaque page indique la langue principale du contenu.",
    "objectives"=> [
      "Favoriser l'indexation des contenus selon leur langue.",
      "Faciliter la traduction automatique.",
      "Permettre une lecture correcte du contenu par un outil de synthèse vocale."
    ],
    "phases"=> [
      "Intégration"
    ]
  ],
  [
    "title"=> "133. La langue principale de la page cible d'un hyperlien est identifiable lorsqu'elle diffère de celle de la page d'origine.",
    "objectives"=> [
      "Permettre aux utilisateurs et outils de navigation d'anticiper le changement de langue en cours de navigation.",
      "Éviter aux utilisateurs de se rendre sur une page dont ils ne comprennent pas la langue."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "134. Chaque changement de langue est signalé.",
    "objectives"=> [
      "Permettre aux aides techniques d'interpréter correctement les contenus exprimés dans une autre langue.",
      "Faciliter le travail des outils de traduction automatiques.",
      "Permettre aux outils d'indexation d'extraire des chaînes dans une langue donnée."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "135. Les liens d'accès aux versions traduites pointent directement vers la traduction de la page courante.",
    "objectives"=> [
      "Donner un accès direct et immédiat aux traductions de la page courante."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "136. Les liens vers les versions équivalentes de la page ou du site sont rédigés dans leur langue cible.",
    "objectives"=> [
      "Permettre l'identification immédiate du lien pertinent par l'utilisateur.",
      "Rendre compréhensible des liens spécialement créés pour un public spécifique."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "137. Le serveur ne force pas la redirection de la version desktop vers la version mobile.",
    "objectives"=> [
      "Laisser le choix à l’utilisateur de la version ayant ses préférences."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "138. Il est possible de basculer depuis chaque page entre les versions mobile et desktop du site.",
    "objectives"=> [
      "Permettre à l’utilisateur de choisir le mode de rendu le plus adapté à ses préférences et à son contexte."
    ],
    "phases"=> [
      "Prototype"
    ]
  ],
  [
    "title"=> "139. Le site ne bloque pas les fonctionnalités de zoom du navigateur.",
    "objectives"=> [
      "Permettre aux utilisateurs d’adapter le rendu à leurs besoins ou à leurs préférences en recourant au zoom graphique."
    ],
    "phases"=> [
      "Intégration"
    ]
  ],
  [
    "title"=> "140. Les alertes javascript et fenêtres modales invitant à l'installation d'une application mobile ne se produisent qu'une seule fois par session.",
    "objectives"=> [
      "Éviter les sollicitations imposées et répétitives.",
      "Faciliter la navigation dans le site.",
      "Prévenir d’éventuelles pénalités de la part des moteurs de recherche."
    ],
    "phases"=> [
      "Intégration",
      "Développement"
    ]
  ],
  [
    "title"=> "141. La promotion de l'application mobile ne recourt ni aux alertes javascript ni aux fenêtres modales.",
    "objectives"=> [
      "Éviter les sollicitations imposées et répétitives.",
      "Faciliter la navigation dans le site.",
      "Prévenir d’éventuelles pénalités de la part des moteurs de recherche."
    ],
    "phases"=> [
      "Prototype"
    ]
  ],
  [
    "title"=> "142. Le site propose un ou plusieurs mécanismes dédiés à l'adaptation aux terminaux mobiles.",
    "objectives"=> [
      "Faciliter la consultation sur les terminaux mobiles.",
      "Améliorer le positionnement dans les outils d’indexation qui prennent ce critère en compte."
    ],
    "phases"=> [
      "Design",
      "Intégration"
    ]
  ],
  [
    "title"=> "143. Les champs de saisie de type mail, URL, téléphone, nombre, recherche, mots de passe, heure et date sont dotés du type approprié.",
    "objectives"=> [
      "Permettre l’utilisation des claviers virtuels adaptés aux différents types de saisie sur les terminaux mobiles.",
      "Faciliter la validation de la saisie. "
    ],
    "phases"=> [
      "Intégration",
      "Développement"
    ]
  ],
  [
    "title"=> "144. Les numéros de téléphone sont activables via le protocole approprié.",
    "objectives"=> [
      "Permettre l’utilisation des claviers virtuels adaptés aux différents types de saisie sur les terminaux mobiles.",
      "Faciliter la validation de la saisie."
    ],
    "phases"=> [
      "Intégration",
      "Développement"
    ]
  ],
  [
    "title"=> "145. Chaque iframe est doté d'une description.",
    "objectives"=> [
      "Permettre une restitution alternative d'un iframe sous la forme d'un lien correctement libellé vers le contenu inclus."
    ],
    "phases"=> [
      "Intégration"
    ]
  ],
  [
    "title"=> "146. Le site n'emploie pas la technique des jeux de cadres.",
    "objectives"=> [
      "Améliorer la consultation et la navigation pour les personnes handicapées.",
      "Éviter les problèmes d'impression ou de mise en favoris.",
      "Améliorer le référencement en évitant l'indexation de pages orphelines."
    ],
    "phases"=> [
      "Intégration"
    ]
  ],
  [
    "title"=> "147. Il est possible de revenir à la page d'accueil depuis toutes les pages.",
    "objectives"=> [
      "Permettre aux utilisateurs de revenir en page d'accueil en cas de désorientation.",
      "Identifier le lien principal permettant d'accéder au site."
    ],
    "phases"=> [
      "Prototype"
    ]
  ],
  [
    "title"=> "148. L'utilisateur est averti des ouvertures de nouvelles fenêtres.",
    "objectives"=> [
      "Permettre à l'utilisateur d'anticiper le résultat de l'activation d'un lien.",
      "Éviter aux utilisateurs d'aides techniques d'être désorientés par l'ouverture d'une nouvelle fenêtre qui n'est pas toujours perceptible et perturbe notamment l'utilisation de l'historique de navigation."
    ],
    "phases"=> [
      "Intégration"
    ]
  ],
  [
    "title"=> "149. La navigation sur le site ne provoque pas l'ouverture de fenêtres surgissantes (popups).",
    "objectives"=> [
      "Permettre à l'utilisateur de naviguer sur le site sans avoir d'opération spécifique à effectuer pendant la navigation.",
      "Éviter à des utilisateurs d'aides techniques d'être désorientés par l'ouverture d'une nouvelle fenêtre qui ne sera pas toujours aisément perceptible et qui perturbe notamment l'utilisation de l'historique de navigation ou qui masquera dans un lecteur d'écran la fenêtre principale."
    ],
    "phases"=> [
      "Prototype"
    ]
  ],
  [
    "title"=> "150. Les mécanismes de fermeture de fenêtres sont visuellement rattachées à leur contenu.",
    "objectives"=> [
      "Faciliter la navigation."
    ],
    "phases"=> [
      "Design"
    ]
  ],
  [
    "title"=> "151. Les mécanismes de fermetures de fenêtres sont immédiatement disponibles.",
    "objectives"=> [
      "Limiter le temps d’apprentissage de l’interface.",
      "Accélérer l’accès aux contenus.",
      "Réduire le taux de rebond."
    ],
    "phases"=> [
      "Prototype"
    ]
  ],
  [
    "title"=> "152. Les nouvelles fenêtres dimensionnées et les fenêtres modales sont dotées d'un bouton de fermeture explicite.",
    "objectives"=> [
      "Donner aux utilisateurs des indications explicites pour fermer une fenêtre ou une boîte modale."
    ],
    "phases"=> [
      "Prototype",
      "Intégration"
    ]
  ],
  [
    "title"=> "153. Les mécanismes de fermetures de fenêtres sont affichés aux mêmes emplacements sur toutes les pages.",
    "objectives"=> [
      "Limiter le temps d’apprentissage de l’interface.",
      "Accélérer l’accès aux contenus.",
      "Faciliter la navigation."
    ],
    "phases"=> [
      "Prototype"
    ]
  ],
  [
    "title"=> "154. La consultation du site ne redimensionne pas la fenêtre du navigateur.",
    "objectives"=> [
      "Laisser à l'utilisateur le contrôle de son navigateur et de son interface de consultation",
      "Ne pas le désorienter ou le surprendre par un changement non anticipé de ceux-ci."
    ],
    "phases"=> [
      "Prototype"
    ]
  ],
  [
    "title"=> "155. Le focus clavier n'est ni supprimé ni masqué.",
    "objectives"=> [
      "Permettre la navigation au clavier ou via des périphériques d'entrées ou des dispositifs qui ne reposent pas sur la souris."
    ],
    "phases"=> [
      "Intégration"
    ]
  ],
  [
    "title"=> "156. Le site est intégralement utilisable au clavier.",
    "objectives"=> [
      "Permettre la navigation au clavier pour les utilisateurs ayant une préférence pour cette pratique.",
      "Permettre la consultation des contenus et l'utilisation des services indépendamment du périphérique d'entrée, afin de les rendre accessibles aux utilisateurs d'aides techniques (lecteurs d'écran par exemple) qui n'utilisent que le clavier ou un périphérique plus spécifique reposant sur les mêmes mécanismes que le clavier (bouton poussoir par exemple)."
    ],
    "phases"=> [
      "Intégration"
    ]
  ],
  [
    "title"=> "157. La navigation au clavier s'effectue dans un ordre prévisible.",
    "objectives"=> [
      "De nombreux utilisateurs naviguent sans souris, avec les touches de leur clavier => facilitez-leur la vie."
    ],
    "phases"=> [
      "Intégration"
    ]
  ],
  [
    "title"=> "158. Le site ne comporte pas de liens internes vers des pages en construction.",
    "objectives"=> [
      "Éviter des clics inutiles aux utilisateurs.",
      "Limiter la consommation inutile de bande passante.",
      "Proposer du contenu à valeur ajoutée."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "159. Chaque page affiche une information permettant de connaître son emplacement dans l'arborescence du site.",
    "objectives"=> [
      "Permettre à l'utilisateur de déterminer son emplacement dans le site.",
      "Simplifier le passage des moteurs de recherche.",
      "Faciliter la navigation dans l'arborescence des contenus."
    ],
    "phases"=> [
      "Prototype"
    ]
  ],
  [
    "title"=> "160. Le site propose un moteur de recherche interne.",
    "objectives"=> [
      "Fournir aux utilisateurs une solution de navigation alternative et d'accès rapide aux contenus liés à des mots-clés retenus par ceux-ci."
    ],
    "phases"=> [
      "Prototype"
    ]
  ],
  [
    "title"=> "161. La page des résultats de recherche indique le nombre de résultats, le nombre de pages de résultats, et le nombre de résultats par page.",
    "objectives"=> [
      "Permettre aux utilisateurs d'avoir l'ensemble des informations essentielles relatives à la recherche qu'ils ont effectuée."
    ],
    "phases"=> [
      "Prototype",
      "Développement"
    ]
  ],
  [
    "title"=> "162. Chaque page de résultats de recherche peut être atteint via une adresse Web.",
    "objectives"=> [
      "Permettre à l’utilisateur de partager ou de conserver dans ses signets un résultat de recherche."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "163. Un plan du site est accessible depuis chaque page.",
    "objectives"=> [
      "Fournir aux utilisateurs une solution en cas de désorientation, pour naviguer et se repérer dans le site, pour visualiser l'ensemble des contenus et la taille du site.",
      "Inciter les responsables du contenu à représenter graphiquement et à rationaliser leur contenu."
    ],
    "phases"=> [
      "Prototype"
    ]
  ],
  [
    "title"=> "164. Les blocs de navigation de même nature sont affichés aux mêmes emplacements sur toutes les pages.",
    "objectives"=> [
      "Faciliter l'apprentissage de la navigation sur l'interface.",
      "Faciliter le repérage de l'information."
    ],
    "phases"=> [
      "Prototype",
      "Design"
    ]
  ],
  [
    "title"=> "165. Les icônes de navigation sont accompagnées d'une légende explicite.",
    "objectives"=> [
      "Limiter le temps d'apprentissage de l'interface.",
      "Faciliter la compréhension des icônes.",
      "Limiter le risque d'erreurs."
    ],
    "phases"=> [
      "Design",
      "Intégration"
    ]
  ],
  [
    "title"=> "166. Les liens provoquant l'ouverture d'un logiciel externe ont un libellé explicite.",
    "objectives"=> [
      "Éviter sur le poste client l'ouverture inopinée d'un autre logiciel que le navigateur Web."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "167. Si le site n'est pas réservé à un public spécifique, l'accès aux contenus est immédiat.",
    "objectives"=> [
      "Permettre aux utilisateurs de commencer immédiatement leur navigation sur la ressource qu'ils ont demandée."
    ],
    "phases"=> [
      "Prototype"
    ]
  ],
  [
    "title"=> "168. Chaque page contient des liens d'accès rapide placés au début du code source.",
    "objectives"=> [
      "Permettre aux utilisateurs qui consultent les pages de manière linéaire (mode vocal) ou semi-linéaire (écran de faible largeur) de ne pas avoir à défiler l'ensemble des éléments sur chaque page pour accéder aux contenus.",
      "Fournir des raccourcis accélérant la navigation au clavier et évitant des actions au clavier répétées pour parcourir la page et atteindre la zone souhaitée."
    ],
    "phases"=> [
      "Design",
      "Intégration"
    ]
  ],
  [
    "title"=> "169. Un lien de désinscription est présent dans chaque newsletter.",
    "objectives"=> [
      "Permettre aux abonnés de ne plus recevoir une newsletter."
    ],
    "phases"=> [
      "Prototype",
      "Développement"
    ]
  ],
  [
    "title"=> "170. La désinscription depuis une newsletter ne demande pas de confirmation par courriel.",
    "objectives"=> [
      "Ne pas imposer à l’utilisateur une étape qui n’est pas nécessaire dans ce contexte."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "171. L'inscription aux newsletters est soumise à un processus de confirmation.",
    "objectives"=> [
      "Éviter l'inscription à une newsletter par un tiers usurpant une identité.",
      "Vérifier que l'adresse e-mail a été saisie sans erreur."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "172. La désinscription aux newsletters est possible depuis le site.",
    "objectives"=> [
      "Permettre à l'utilisateur de se désinscrire sans nécessairement passer par un mail."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "173. La dernière newsletter envoyée est disponible en ligne.",
    "objectives"=> [
      "Permettre aux utilisateurs de se faire une idée de la newsletter envoyée aux abonnés.",
      "Permettre aux utilisateurs de consulter la newsletter en dehors des contraintes de l'email.",
      "Accroître le référencement de vos contenus."
    ],
    "phases"=> [
      "Prototype"
    ]
  ],
  [
    "title"=> "174. Les archives de newsletters sont disponibles en ligne.",
    "objectives"=> [
      "Faciliter la consultation des archives des newsletters.",
      "Permettre aux utilisateurs de se faire une idée de la newsletter envoyée aux abonnés.",
      "Favoriser le référencement de vos contenus."
    ],
    "phases"=> [
      "Prototype"
    ]
  ],
  [
    "title"=> "175. La fréquence d'envoi des newsletters est consultable avant l'abonnement.",
    "objectives"=> [
      "Permettre aux utilisateurs de connaître avant leur inscription la fréquence à laquelle ils recevront la newsletter."
    ],
    "phases"=> [
      "Prototype",
      "Rédaction"
    ]
  ],
  [
    "title"=> "176. La charte graphique est cohérente sur l'ensemble du site.",
    "objectives"=> [
      "Permettre une homogénéité et une continuité dans la visite et la navigation.",
      "Permettre une identification permanente du service en ligne visité."
    ],
    "phases"=> [
      "Design"
    ]
  ],
  [
    "title"=> "177. La taille des polices destinées à l'affichage écran est exprimée en taille variable et non en taille fixe.",
    "objectives"=> [
      "Permettre aux utilisateurs équipés de navigateurs qui ne gèrent pas l’agrandissement des polices en taille fixe d’agrandir les polices sans difficulté."
    ],
    "phases"=> [
      "Intégration"
    ]
  ],
  [
    "title"=> "178. Le site propose des styles dédiés à l'impression.",
    "objectives"=> [
      "Permettre l'impression des contenus sous une forme appropriée au support."
    ],
    "phases"=> [
      "Intégration"
    ]
  ],
  [
    "title"=> "179. Le contenu de chaque page est disponible à l'impression sans blocs de navigation.",
    "objectives"=> [
      "Améliorer la lisibilité et la pertinence des contenus imprimés.",
      "Rationnaliser l'espace utilisé par les contenus imprimés pour économiser du papier."
    ],
    "phases"=> [
      "Intégration"
    ]
  ],
  [
    "title"=> "180. Une famille générique de police est indiquée comme dernier élément de substitution.",
    "objectives"=> [
      "Permettre aux contenus de s'afficher correctement, même lorsque les polices prévues ne sont pas présentes sur le système de l'utilisateur."
    ],
    "phases"=> [
      "Intégration"
    ]
  ],
  [
    "title"=> "181. Les contenus sont présentés avec un contraste suffisant par rapport à leur arrière-plan.",
    "objectives"=> [
      "Permettre une bonne lisibilité des contenus.",
      "Limiter la charge mentale lors de la consultation."
    ],
    "phases"=> [
      "Design"
    ]
  ],
  [
    "title"=> "182. Les mises en majuscules à des fins décoratives sont effectuées à l'aide des styles",
    "objectives"=> [
      "Permettre un copier-coller des contenus indépendamment de la mise en forme entièrement en majuscules.",
      "Faciliter l'adaptation de la mise en forme pour les utilisateurs ayant des difficultés de lecture des textes entièrement en majuscules."
    ],
    "phases"=> [
      "Intégration",
      "Rédaction"
    ]
  ],
  [
    "title"=> "183. Les styles ne justifient pas le texte.",
    "objectives"=> [
      "Faciliter la lecture à l’écran, notamment pour les personnes dyslexiques."
    ],
    "phases"=> [
      "Design"
    ]
  ],
  [
    "title"=> "184. Un contenu n'est pas désigné uniquement par sa forme ou par sa position à l'écran.",
    "objectives"=> [
      "Permettre la compréhension de l'information sans l'accès au support visuel ou lorsque le rendu de celui-ci est altéré."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "185. L'identité des prestataires impliqués dans les transactions est précisée.",
    "objectives"=> [
      "Fournir aux utilisateurs des informations sur les partenaires tiers impliqués dans la transaction."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "186. La politique de confidentialité et de respect de la vie privée est accessible depuis toutes les pages.",
    "objectives"=> [
      "Permettre aux utilisateurs de connaître les conditions de conservation de leurs données personnelles."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "187. Le site propose une procédure de réinitialisation du mot de passe.",
    "objectives"=> [
      "Permette à l'utilisateur d'accéder à son compte en cas de perte du mot de passe.",
      "Simplifier la gestion des comptes utilisateurs.",
      "Renforcer la sécurité en évitant le stockage de mots de passe non cryptés afin de pouvoir les communiquer de nouveau à l'utilisateur."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "188. Les mots de passe peuvent être choisis ou changés par l'utilisateur.",
    "objectives"=> [
      "Permettre aux utilisateurs de choisir un mot de passe personnalisé.",
      "Éviter aux utilisateurs de rechercher leur mot de passe à chaque connexion."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "189. Les mots de passe choisis par l'utilisateur admettent les caractères imprimables de la table ASCII.",
    "objectives"=> [
      "Favoriser un niveau élevé de sécurité des mots de passe."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "190. Un dispositif sensibilise l'utilisateur sur le degré de sécurisation du mot de passe qu'il choisit",
    "objectives"=> [
      "Informer les utilisateurs sur le niveau de sécurité du mot de passe choisi et donc sur les risques de détournement."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "191. Les certificats de sécurité sont signés et en cours de validité.",
    "objectives"=> [
      "Permettre aux utilisateurs de connaître la validité du certificat et contribuer à la sécurisation de la transaction."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "192. Les données sensibles ne sont pas transmises en clair dans les url.",
    "objectives"=> [
      "Éviter que des données sensibles ne soient publiques et stockées en clair aux différentes étapes de l'accès à la page (FAI, proxy, serveur Web, historique du navigateur, services tiers…).",
      "Permettre à l'utilisateur de saisir des données sensibles en sachant qu'elles seront protégées et confidentielles."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "193. Les échanges de données sensibles sont sécurisés et signalés comme tels.",
    "objectives"=> [
      "Conforter la confiance de l'utilisateur.",
      "Permettre à l'utilisateur de saisir des données sensibles en sachant qu'elles seront protégées.",
      "Minimiser les risques d'utilisation frauduleuse des données des utilisateurs."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "194. Les en-têtes envoyés par le serveur désactivent la détection automatique du type MIME de chaque ressource.",
    "objectives"=> [
      "Réduire les risques de téléchargement d’un contenu dangereux dissimulé."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "195. Le serveur indique le type MIME de chaque ressource.",
    "objectives"=> [
      "Réduire les risques de téléchargement d’un contenu dangereux dissimulé."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "196. Les informations sur la sécurité des transactions sont indiquées.",
    "objectives"=> [
      "Contribuer à l'information des utilisateurs sur la sécurisation des échanges de données sensibles."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "197. L'objectif des cookies et les limitations inhérentes à leur refus sont expliqués.",
    "objectives"=> [
      "Informer l'utilisateur sur les cookies.",
      "Expliquer leur rôle et leur utilité."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "198. La procédure d'accès et de rectification des données personnelles est décrite.",
    "objectives"=> [
      "Informer l'utilisateur sur l'utilisation de ses données personnelles.",
      "Conforter la confiance dans le site ou le service.",
      "Faciliter la gestion des demandes liées aux données personnelles."
    ],
    "phases"=> [
      "Rédaction"
    ]
  ],
  [
    "title"=> "199. La création d'un compte est soumise à un processus de confirmation.",
    "objectives"=> [
      "Réduire les risques d’inscription de l’utilisateur à son insu."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "200. La création de compte est possible sans recours à un système d'identification tiers.",
    "objectives"=> [
      "Laisser l’utilisateur libre de son choix d’utiliser ou non un service tiers.",
      "Fournir un moyen alternatif d’accès au service.",
      "Fournir un moyen d’accès maîtrisé par les administrateurs du service.",
      "Limiter la dépendance à un acteur tiers dont la politique et la stratégie commerciale ou technique ne manquera pas d’évoluer dans le temps."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "201. Les comptes ou abonnements ouverts en ligne peuvent être fermés par le même moyen.",
    "objectives"=> [
      "Faciliter la gestion des comptes utilisateurs.",
      "Éviter à l'utilisateur une recherche de contact.",
      "Conforter la confiance dans le site ou le service."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "202. Le serveur n'envoie pas la liste des fichiers des répertoires n'ayant pas de page d'index.",
    "objectives"=> [
      "Éviter l'affichage de listes de fichiers contenus dans un répertoire.",
      "Améliorer la sécurité du serveur.",
      "Limiter les risques d'intrusion."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "203. Le serveur envoie les informations d'activation de protection cross site scripting.",
    "objectives"=> [
      "Réduire les risques de téléchargement d’un contenu dangereux dissimulé."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "204. Le serveur envoie les informations indiquant les domaines autorisés à intégrer ses pages dans des cadres.",
    "objectives"=> [
      "Réduire les risques d’utilisation trompeuse du contenu."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "205. Le site propose un mécanisme de sécurité permettant de restreindre l'origine des contenus.",
    "objectives"=> [
      "Réduire les risques d’exécution ou d’affichage d’un contenu non désirable ou d’une source non autorisée."
    ],
    "phases"=> [
      "Intégration",
      "Développement"
    ]
  ],
  [
    "title"=> "206. Le serveur envoie les informations permettant la mise en cache des contenus.",
    "objectives"=> [
      "Accélérer l'affichage des contenus et permettre une navigation plus fluide.",
      "Réduire les coûts de bande passante."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "207. Le serveur envoie un code http 404 pour les ressources non trouvées.",
    "objectives"=> [
      "Permettre la détection automatisée des URL erronées.",
      "Transmettre au navigateur une information sûre."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "208. Le serveur envoie une page d'erreur 404 personnalisée.",
    "objectives"=> [
      "Informer l'utilisateur sur l'erreur rencontrée, sur la continuité de fonctionnement du serveur et lever le doute sur un éventuel problème lié à sa connexion."
    ],
    "phases"=> [
      "Design",
      "Développement"
    ]
  ],
  [
    "title"=> "209. Le serveur envoie une page d'interdiction 403 personnalisée.",
    "objectives"=> [
      "Rassurer l'internaute sur le fait qu'il est toujours dans le même site.",
      "Permettre à l'administrateur du site de mettre des éléments de guidage pour l'utilisateur.",
      "Informer l'utilisateur sur l'erreur rencontrée, sur la continuité de fonctionnement du serveur et mettre hors de cause sa connexion."
    ],
    "phases"=> [
      "Design",
      "Développement"
    ]
  ],
  [
    "title"=> "210. Le menu principal de navigation figure sur les pages d'erreur personnalisées.",
    "objectives"=> [
      "Éviter aux utilisateurs les ruptures de navigation, l'arrivée sur des pages cul-de-sac ou l'obligation d'utiliser le bouton Précédent du navigateur."
    ],
    "phases"=> [
      "Prototype",
      "Développement"
    ]
  ],
  [
    "title"=> "211. Le serveur transmet des contenus compressés aux clients qui les acceptent.",
    "objectives"=> [
      "Améliorer la vitesse de rendu de la page.",
      "Diminuer les coûts de bande passante."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "212. Les en-têtes envoyés par le serveur contiennent les informations relatives au jeu de caractères employé.",
    "objectives"=> [
      "Permettre au navigateur de choisir le bon encodage des caractères pour afficher la page."
    ],
    "phases"=> [
      "Intégration",
      "Développement"
    ]
  ],
  [
    "title"=> "213. Le serveur respecte l'ordre préférentiel de langues des outils de consultation.",
    "objectives"=> [
      "Servir les pages dans la langue souhaitée."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "214. Les feuilles de style du site sont minifiées.",
    "objectives"=> [
      "Minimiser la quantité de données à télécharger par l'utilisateur.",
      "Améliorer les performances."
    ],
    "phases"=> [
      "Intégration"
    ]
  ],
  [
    "title"=> "215. Les scripts du site sont minifiés.",
    "objectives"=> [
      "Accélérer la vitesse d'affichage des pages.",
      "Améliorer les performances.",
      "Diminuer la quantité de données à télécharger."
    ],
    "phases"=> [
      "Intégration"
    ]
  ],
  [
    "title"=> "216. Les fonctions de scripts internes au site sont placées dans des fichiers externes.",
    "objectives"=> [
      "Minimiser la quantité de données à télécharger par l'utilisateur.",
      "Améliorer les performances."
    ],
    "phases"=> [
      "Intégration"
    ]
  ],
  [
    "title"=> "217. L'adresse du site et de ses sous-domaines fonctionnent avec ou sans préfixe www.",
    "objectives"=> [
      "Permettre aux utilisateurs de rejoindre la page d'accueil du site même lorsqu'ils oublient de taper le préfixe www."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "218. Le code source des fils de syndication indique leur fréquence de mise à jour.",
    "objectives"=> [
      "Permettre aux utilisateurs de configurer la fréquence à laquelle leurs outils consultent le fil de syndication.",
      "Réduire la charge du serveur."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "219. Les fils de syndication sont détectables par les agents utilisateurs.",
    "objectives"=> [
      "Permettre au navigateur d'indiquer dans son interface la présence d'un fil de syndication associé à la page en cours de consultation."
    ],
    "phases"=> [
      "Intégration"
    ]
  ],
  [
    "title"=> "220. Les hyperliens contenus dans les fils de syndication sont absolus.",
    "objectives"=> [
      "Assurer la fiabilité des liens lorsque le contenu est réutilisé."
    ],
    "phases"=> [
      "Développement"
    ]
  ],
  [
    "title"=> "221. Le site propose au moins un lien vers chaque fil de syndication.",
    "objectives"=> [
      "Permettre aux utilisateurs de s'abonner facilement aux fils de syndication."
    ],
    "phases"=> [
      "Intégration",
      "Syndication"
    ]
  ],
  [
    "title"=> "222. Les cellules des tableaux de données sont reliées à leurs en-têtes.",
    "objectives"=> [
      "Permettre aux aides techniques de restituer l'information contenue dans les tableaux de données de manière compréhensible, en indiquant à l'utilisateur les relations logiques entre contenu et en-têtes du tableau."
    ],
    "phases"=> [
      "Intégration"
    ]
  ],
  [
    "title"=> "223. Les titres des tableaux de données sont renseignés.",
    "objectives"=> [
      "Permettre aux utilisateurs d'aides techniques (lecteurs d'écran) d'identifier aisément la nature des informations fournies par un tableau."
    ],
    "phases"=> [
      "Intégration",
      "Rédaction"
    ]
  ],
  [
    "title"=> "224. La linéarisation des tableaux utilisés pour la mise en page ne nuit pas à la compréhension des contenus.",
    "objectives"=> [
      "Fournir un contenu compréhensible aux utilisateurs dont l'agent utilisateur ou l'aide technique (lecteur d'écran) ne permet pas de restituer la mise en forme initialement prévue à l'aide d'un tableau."
    ],
    "phases"=> [
      "Intégration"
    ]
  ],
  [
    "title"=> "225. Les tableaux de données ne sont pas remplacés par des images.",
    "objectives"=> [
      "Permettre aux utilisateurs d’accéder à des tableaux exploitables par leur agent utilisateur et restitués de manière compréhensible dans tous les cas."
    ],
    "phases"=> [
      "Intégration",
      "Rédaction"
    ]
  ],
  [
    "title"=> "226. Les tableaux de données ne sont pas simulés à l'aide de texte mis en forme.",
    "objectives"=> [
      "Permettre aux utilisateurs d'accéder à des tableaux exploitables par leur agent utilisateur et restitués de manière compréhensible dans tous les cas."
    ],
    "phases"=> [
      "Intégration",
      "Rédaction"
    ]
  ]
    ];