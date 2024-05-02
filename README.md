# Git Commit Messages Style-Guides

- Use the present tense ("Add feature" not "Added feature")
- Use the imperative mood ("Move cursor to..." not "Moves cursor to...")
- Limit the first line to 72 characters or less
- Reference issues and pull requests liberally after the first line
- When only changing documentation, include `[ci skip]` in the commit title
- Consider starting the commit message with an applicable emoji

# Types

|       Type       | Description                                       |
| :--------------: | ------------------------------------------------- |
|      `new`       | for new feature implementing commit               |
| `feat / feature` | for new feature implementing commit (equal `new`) |
|     `update`     | for update commit                                 |
|      `bug`       | for bug fix commit                                |
|    `security`    | for security issue fix commit                     |
|  `performance`   | for performance issue fix commit                  |
|  `improvement`   | for backwards-compatible enhancement commit       |
|    `breaking`    | for backwards-incompatible enhancement commit     |
|   `deprecated`   | for deprecated feature commit                     |
|      `i18n`      | for i18n (internationalization) commit            |
|      `a11y`      | for a11y (accessibility) commit                   |
|    `refactor`    | for refactoring commit                            |
|      `docs`      | for documentation commit                          |
|    `example`     | for example code commit                           |
|      `test`      | for testing commit                                |
|      `deps`      | for dependencies upgrading or downgrading commit  |
|     `config`     | for configuration commit                          |
|     `build`      | for packaging or bundling commit                  |
|    `release`     | for publishing commit                             |
|      `wip`       | for work in progress commit                       |
|     `chore`      | for other operations commit                       |

# Emojis

|            Emoji            | Raw Emoji Code                | Type                      | Description                                            |
| :-------------------------: | ----------------------------- | ------------------------- | ------------------------------------------------------ |
|           :star:            | `:star:`                      | `new` or `feat / feature` | add **new feature**                                    |
|            :bug:            | `:bug:`                       | `bug`                     | fix **bug** issue                                      |
|         :ambulance:         | `:ambulance:`                 | `bug`                     | ciritial hotfix **bug** issue                          |
|           :lock:            | `:lock:`                      | `security`                | fix **security** issue                                 |
| :chart_with_upwards_trend:  | `:chart_with_upwards_trend:`  | `performance`             | fix **performance** issue                              |
|            :zap:            | `:zap:`                       | `improvement`             | update **backwards-compatible** feature                |
|           :boom:            | `:boom`                       | `breaking`                | update **backwards-incompatible** feature              |
|          :warning:          | `:warning:`                   | `deprecated`              | **deprecate** feature                                  |
|   :globe_with_meridians:    | `:globe_with_meridians:`      | `i18n`                    | update or fix **internationalization**                 |
|        :wheelchair:         | `:wheelchair:`                | `a11y`                    | update or fix **accessibility**                        |
|      :rotating_light:       | `:rotating_light:`            | `refactor`                | remove **linter**/strict/deprecation warnings          |
|           :shirt:           | `:shirt:`                     | `refactor`                | **refactoring** or code **layouting**                  |
|     :white_check_mark:      | `:white_check_mark:`          | `test`                    | add **tests**, fix **tests** failur or **CI** building |
|          :pencil:           | `:pencil:`                    | `docs`                    | update **documentation**                               |
|         :copyright:         | `:copyright:`                 | `docs`                    | decide or change **license**                           |
|         :lollipop:          | `:lollipop:`                  | `example`                 | for **example** or **demo** codes                      |
|         :lipstick:          | `:lipstick:`                  | `update`                  | update **UI/Cosmetic**                                 |
|            :up:             | `:up:`                        | `update`                  | update **other**                                       |
|           :truck:           | `:truck:`                     | `update`                  | **move** or **rename** files, repository, ...          |
| :twisted_rightwards_arrows: | `:twisted_rightwards_arrows:` | `update`                  | merge **conflict resolution**                          |
|      :heavy_plus_sign:      | `:heavy_plus_sign:`           | `update`                  | **add** files, dependencies, ...                       |
|     :heavy_minus_sign:      | `:heavy_minus_sign:`          | `update`                  | **remove** files, dependencies, ...                    |
|            :on:             | `:on:`                        | `update`                  | **enable** feature and something ...                   |
|         :arrow_up:          | `:arrow_up:`                  | `deps`                    | upgrade **dependencies**                               |
|        :arrow_down:         | `:arrow_down:`                | `deps`                    | downgrade **dependencies**                             |
|          :pushpin:          | `:pushpin:`                   | `deps`                    | pin **dependencies**                                   |
|          :wrench:           | `:wrench:`                    | `config`                  | update **configuration**                               |
|          :package:          | `:package:`                   | `build`                   | **packaging** or **bundling** or **building**          |
|      :hatching_chick:       | `:hatching_chick:`            | `release`                 | **initial** commit                                     |
|       :confetti_ball:       | `:confetti_ball:`             | `release`                 | release **major** version                              |
|           :tada:            | `:tada:`                      | `release`                 | release **minor** version                              |
|         :sparkles:          | `:sparkles:`                  | `release`                 | release **patch** version                              |
|          :rocket:           | `:rocket:`                    | `release`                 | **deploy** to production enviroment                    |
|         :bookmark:          | `:bookmark:`                  | `release`                 | **tagged** with version label                          |
|           :back:            | `:back:`                      | `revert`                  | **revert** commiting                                   |
|       :construction:        | `:construction:`              | `wip`                     | **WIP** commiting                                      |
