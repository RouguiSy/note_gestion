
# 📓 Journal de Développement (DEVLOG)

**Nom & Prénom** : Rougui Sy
**Projet** : Gestion de Notes

---

## 1. Tables de la Base de Données

| Table                | Description                                             |
| -------------------- | ------------------------------------------------------- |
| `roles`            | Gestion des rôles utilisateurs                         |
| `utilisateurs`     | Utilisateurs du système (enseignants, administrateurs) |
| `annees_scolaires` | Années scolaires                                       |
| `classes`          | Classes (6ème, 5ème, etc.)                            |
| `matieres`         | Matières enseignées                                   |
| `matiere_classe`   | Association matière-classe                             |
| `eleves`           | Élèves inscrits                                       |
| `inscriptions`     | Inscriptions des élèves par année                    |
| `periodes`         | Périodes (Trimestre 1, 2, 3)                           |
| `etablissement`    | Établissement scolaire                                 |

---

## 2. Entités POO

| Entité           | Attributs                                                                                | Concept POO utilisé                      |
| ----------------- | ---------------------------------------------------------------------------------------- | ----------------------------------------- |
| `Role`          | id, nom                                                                                  | Encapsulation (private + getters/setters) |
| `Utilisateur`   | id, nom, prenom, email, mot_de_passe, role_id                                            | Encapsulation                             |
| `AnneeScolaire` | id, libelle                                                                              | Encapsulation                             |
| `Classe`        | id, libelle                                                                              | Encapsulation                             |
| `Matiere`       | id, libelle                                                                              | Encapsulation                             |
| `MatiereClasse` | id, classe_id, matiere_id                                                                | Encapsulation (table de liaison)          |
| `Eleve`         | id, matricule, nom, prenom, status                                                       | Encapsulation                             |
| `Inscription`   | id, eleve_id, classe_id, annee_scolaire_id                                               | Encapsulation                             |
| `Periode`       | id, nom                                                                                  | Encapsulation                             |
| `Evaluation`    | id, inscription_id, matiere_classe_id, utilisateur_id, periode_id, type_evaluation, note | Encapsulation                             |
| `Etablissement` | id, libelle                                                                              | Encapsulation                             |

---

## 3. Concepts POO Utilisés

### Encapsulation

- Tous les attributs sont déclarés en `private`
- Accès via des getters et setters publics
- Le constructeur initialise les propriétés
