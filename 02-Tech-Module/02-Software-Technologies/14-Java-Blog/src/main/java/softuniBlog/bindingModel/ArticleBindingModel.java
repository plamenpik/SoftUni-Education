package softuniBlog.bindingModel;

import javax.validation.constraints.NotNull;
import java.beans.Transient;

public class ArticleBindingModel {

    public ArticleBindingModel(){

    }

    @NotNull
    private String title;

    @NotNull
    private String content;

    @NotNull
    public String getTitle() {
        return title;
    }

    public void setTitle(@NotNull String title) {
        this.title = title;
    }

    @NotNull
    public String getContent() {
        return content;
    }

    public void setContent(@NotNull String content) {
        this.content = content;
    }
}
